$(document).ready(function() {
    $('#botonRegistro').click(function(e) {
        e.preventDefault;

// function guardarIndividual(){
    var nombre = document.getElementById("nombreAlta").value;
    var telefono = document.getElementById("telefonoAlta").value;
    var email = document.getElementById("emailAlta").value;
    var mesa = document.getElementById("mesaAlta").value;
    var internacional = document.getElementById("internacional").value;
    var tipo = document.getElementById("tipoInvitado").value;
    var paxMesa = document.getElementById("paxMesa").value;

    if (nombre == "" || telefono == "" || email == "" || mesa=="" || tipo ==""){
        alert("Se deben llenar todos los campos");
        return;
    }
    else {

    $.ajax({
        type:"POST",
        url:"prcd/proceso_alta_individual.php",
        data:{
            nombre:nombre,
            telefono:telefono,
            email:email,
            mesa:mesa,
            internacional:internacional,
            tipo:tipo,
            paxMesa:paxMesa
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
                    imageUrl: '../assets/brand/img/SmartEventLogo.png',
                    imageWidth: 170,
                    imageHeight: 136,
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
                    imageUrl: '../assets/brand/img/SmartEventLogo.png',
                    imageWidth: 170,
                    imageHeight: 136,
                    imageAlt: 'Imagen',
                })
            }
        } 

    });
}

})

})