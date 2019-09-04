$(document).ready(function(){
    $("#btn").on("click",function(){
        var name = $("#name").val();
        var comment = $("#comment").val();
        $.ajax({
            url: 'server.php',
            type: 'POST',
            data: {
                save: 1,
                Name: name,
                Comment: comment
            }
            /*success: function(response){
                name.val('');
                comment.val('');
                //$("#msgs").prepend(response);
            }*/
        });
    });



    $(".delete").on("click",function(){
        var id = $(this).data("id");
        alert(id);
        var clicked_button = $(this);
        $.ajax({
            url: 'server.php',
            type: 'GET',
            data: {
                delete: 1,
                ID: id
            },
            success: function(response){
                clicked_button.parent().parent().remove();
            }
        });
    });
});