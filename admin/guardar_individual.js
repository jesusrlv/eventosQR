$(document).ready(function() {
    $('#botonRegistro').click(function(e) {
        e.preventDefault;

// function guardarIndividual(){
    var nombre = document.getElementById("nombreAlta").value;
    var telefono = document.getElementById("telefonoAlta").value;
    var email = document.getElementById("emailAlta").value;
    var mesa = document.getElementById("mesaAlta").value;

    $.ajax({
        type:"POST",
        url:"prcd/proceso_alta_individual.php",
        data:{
            nombre:nombre,
            telefono:telefono,
            email:email,
            mesa:mesa
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            console.log(jsonData.error);

            var hecho = jsonData.success;
            if(hecho = 1){
                Swal.fire({
                    icon: 'success',
                    title: 'Registrado',
                    html: 'Asistente registrado.<br>Revisa la lista de asistentes para verificar su QR y mesa.',
                    imageUrl: 'https://unsplash.it/400/200',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Imagen',
                  });

                document.getElementById("nombreAlta").value = "";
                document.getElementById("telefonoAlta").value = "";
                document.getElementById("emailAlta").value = "";
                document.getElementById("mesaAlta").value = "";
            }
            else if(hecho = 2){
                console.log(jsonData.error);
                Swal.fire({
                    icon: 'warning',
                    title: 'No se registrado',
                    html: 'No se registrado.',
                    imageUrl: 'https://unsplash.it/400/200',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Imagen',
                  })
            }
        }               
    });


})

})