$(document).ready(function() {
    $('#botonRegistro').click(function(e) {
// function guardarIndividual(){
    e.preventDefault;
    var nombre = document.getElementById("nombre").value;
    var telefono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;
    var mesa = document.getElementById("mesa").value;

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
                  })
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