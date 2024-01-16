<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Ajax</title>
    <!-- Incluye jQuery (asegúrate de cambiar la URL a la versión que estás utilizando) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>Lista Aldeas donde soy PRINCIPE</h1>
    <br>
    <button id="miBoton">Ver aldeas</button>
    <br>
    <div id="resultado"></div>
    <br>
    <script>
        // Espera a que el documento esté listo
        $(document).ready(function() {
            
            // Agrega un evento clic al botón
            $('#miBoton').on('click', function() {
                
                // Realiza la llamada Ajax
                $.ajax({
                    url: 'http://127.0.0.1:8000/dameAldeas',  // Reemplaza esto con la ruta correcta de tu servidor
                    type: 'GET',  // Puedes cambiar a 'POST' si es necesario
                     // Tipo de datos que esperas recibir
                    success: function(response) {
                        // Maneja la respuesta exitosa aquí
                        var listaAldeas = '<ul>';
                        $.each(response.datos, function(index, aldea) {
                            listaAldeas += '<li>' + aldea + '</li>';
                        });
                        listaAldeas += '</ul>';
                        $('#resultado').html('Respuesta del servidor: ' + listaAldeas);
                    },
                    error: function(error) {
                        // Maneja el error aquí
                        console.error('Error en la llamada Ajax:', error);
                    }
                });
            });
        });
    </script>