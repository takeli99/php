
document.addEventListener('DOMContentLoaded', function () {
    function mostrarSweetAlert() {
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        );
    }

    // Tu código JavaScript aquí
    addEventListener('load', inicializarEventos, false);
    
    


    function inicializarEventos() {
        for (var f = 1; f <= 4; f++) {
            var ob = document.getElementById('enlace' + f);
            ob.addEventListener('click', presionEnlace, false);
        }
    }

    function presionEnlace(e) {
        e.preventDefault();
        var url = e.target.getAttribute('href');
          console.log("URL a cargar: " + url);
        cargarHamburguesa(url);
    }

    var conexion1;
    function cargarHamburguesa(url) {
        conexion1 = new XMLHttpRequest();
        conexion1.onreadystatechange = procesarEventos;
        conexion1.open("GET", url, true);
        conexion1.send('');

    }

    
function procesarEventos() {
    var info = document.getElementById("mostrar");
    // Muestra "Cargando..." mientras se espera la respuesta.
    info.innerHTML = "Cargando....";
    if (conexion1.readyState == 4) {
        setTimeout(function () {
            info.innerHTML = "";
            if (conexion1.status == 200) {
                // Si la respuesta es exitosa (status 200), muestra el contenido.
                info.innerHTML = conexion1.responseText;
            } else {
                // Si hay un error en la respuesta, muestra un mensaje de error.
                alert("Error en la solicitud. Status: " + conexion1.status);
            }
        }, 2000);
    }
}
});



