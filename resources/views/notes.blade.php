@extends('layouts.notes-master')

@section('contents')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h1>Welcome to Fab Notes</h1>
    <p class="lead">A Sweet platform for making notes. </p>

    Here are your notes...

    <br>
    <section id="noteHeaderArea">
        <apan class="icon">
            <img src="images/ic_note_add_black_24px.svg"  id="addButton" alt="" data-toggle="modal" data-target="#myModal">
        </apan>

        <apan class="icon"><img src="images/ic_delete_forever_black_24px.svg" id="delButton" alt="" data-toggle="modal" data-target="#myDelModal"></apan>

        <span id="information-area"> Basic information</span>
    </section>
    <section id="notesArea">
    @if(!Auth::guest())

        @foreach ($info as $note)
            <article class="note note-blue" id="{{$note->id}}">
                {{$note->noteText}}
            </article>
        @endforeach
    @else
        <span class="note">Please log in to view or create some notes</span>
    @endif
    </section>

    {{--{{ $info}}--}}



    @include("addModal")
    @include("deleteNote")

@endsection

@section("info")
Whats going on here?

@endsection

