<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add a Note</h4>
            </div>
            <form method="post" action="/notes">
                {{ csrf_field() }}

                <div class="modal-body">
                    <textarea id="noteEntry" name="noteText"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save changes">
                    <input type="hidden" value="{{Auth::user()->id }}" name="userId">
                </div>
            </form>
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