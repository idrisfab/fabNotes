<!-- Modal -->
<div class="modal fade" id="myDelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete a Note</h4>
            </div>
                {{ csrf_field() }}

                <div class="modal-body">

                    <table>
                        {!! Form::open(['url'=> 'notes', 'method'=>'delete']) !!}
                        <thead>
                        <tr>
                                <td>Select</td> <td>Note</td>   <td>Date Created</td>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($info as $note)

                            <tr>
                                <td>    <input type="radio" name="checkDelete" id="{{$note->id}}" value="{{$note->id}}">    </td>
                                <td>{{$note->noteText}}</td>
                                <td>{{$note->updated_at}}</td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>


                </div>
                <div class="modal-footer">
                    {!! Form::submit('Delete Note', array('class'=>'btn btn-primary')) !!}


                    {!! Form::button('Cancel', ['type'=>'button', 'class'=>'btn btn-default', 'data-dismiss'=>'modal']) !!}

                    {!! Form::hidden('noteID', Auth::user()->id)   !!}

                </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: idris
 * Date: 27/12/2016
 * Time: 03:07
 */
?>