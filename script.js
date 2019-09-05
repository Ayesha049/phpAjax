$(document).ready(function(){
    $("#btn").on("click",function(e){
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
        var id = $(this).data('id');
        //console.log(id);
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

    var edit_id;
    var clicked_button;

    $(".edit").on("click",function(){
        
        edit_id = $(this).data('id');
        clicked_button = $(this);

        var name = $(this).parent().siblings('.dis_name').text();
        var comment = $(this).parent().siblings('.dis_com').text();
        //console.log('name: ',name,'comment :',comment);

        $("#name").val(name);
        $("#comment").val(comment);
        $('#btn').hide();
        $('#editbtn').show();
        

    });

    $("#editbtn").on("click",function(){
        var name = $("#name").val();
        var comment = $("#comment").val();

        $.ajax({
            url: 'server.php',
            type: 'POST',
            data: {
                update: 1,
                id: edit_id,
                Name: name,
                Comment: comment
            }
            /*success: function(response){
                name.val('');
                comment.val('');
                
            }*/
        });
    });

});