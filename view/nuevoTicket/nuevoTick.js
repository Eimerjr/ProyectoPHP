console.log("Ejecutado Note")

function init(){
    $("#ticket_form").on("submit", function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function() {
    $('#tick_descripcion').summernote({
        height:200
    });

    $.post("../../controller/categoria.php?op=combo",function(data,status){
        $('#categoria_id').html(data);
        console.log("funciona");

  });

});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);

    $.ajax({
        url: "../../controller/ticket.php?op=insert",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            $('#tick_titulo').val('');
            $('#tick_descripcion').summernote('reset');
            swal("Exito", "Has enviado un ticket", "success");
        }
    });
}
 
init();