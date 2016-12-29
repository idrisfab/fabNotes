<?php

namespace App\Http\Controllers;
use App\Notes as Notes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notes', ['info' => $this->getAllNotes(Auth::user()->id)]);
    }

    public function getAllNotes($user)
    {
        $allNotes = Notes::where("userId", "=", $user )->get();

        return $allNotes;
    }

    public function addNote(Request $request)
    {
        // with the Notes model, we can use the eloquent
        // function create that will use specified
        // values to create a new item.

        // do a quick check to see if some notes have been inserted or not

        $data = $request->noteText;

        if($data == "")
        {
            echo "
                <div class=\"alert alert-danger alert-dismissable\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                    <strong>Error - Previous note wasn't saved</strong> Please be sure to enter text into the note field.
                </div>
            ";
        }
        else
        {
            Notes::create($request->all());
        }

        return view("/notes", ['info' => $this->getAllNotes(Auth::user()->id)]);
    }

    public function deleteNote(Request $request)
    {
        // actually remove the item from the database, based on the id using the eloquent method, destroy.
        // Notes::destroy($request->noteID);

        // alternatively, we can find the note fist, see if it actually exists then remove it.
        // find individual note

        $noteID = Notes::find($request->checkDelete);

        // check it actually exisits and remove
        if($noteID != null)
        {
            $noteID->delete();
            // go back to the route
            return redirect("notes");
        }

    }

}
