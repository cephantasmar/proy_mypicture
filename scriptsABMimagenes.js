$(document).ready(function() {
    // Cargar la lista de publicaciones al cargar la página
    cargarPublicaciones();

    // Manejar el envío del formulario para agregar publicación
    $('#formulario').submit(function(e) {
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: 'POST',
            url: 'agregar_publicacion.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert(response);
                cargarPublicaciones();
                $('#formulario')[0].reset();
            }
        });
    });
});

function cargarPublicaciones() {
    $.ajax({
        type: 'GET',
        url: 'obtener_publicaciones.php',
        success: function(response) {
            $('#lista-publicaciones').html(response);
        }
    });
}
