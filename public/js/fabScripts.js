$(
    function ()
    {
        console.log("What");

        $("#addButton").hover(
            function ()
            {
                $("#information-area").html("Add a new note");
            }
        );

        $("#delButton").hover(
            function ()
            {
                $("#information-area").html("Remove note");
            }
        );
        $('.note').hover
        (
            function ()
            {
                $("#information-area").html("Click to view this note");
            }
        );

    }
);
/**
 * Created by idris on 27/12/2016.
 */
