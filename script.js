 // LOGIN

 $(document).ready(function() {
    $('#pwdForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'prcd/login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
 
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Admin',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./admin/';});
                }
                else if (jsonData.success == "2")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Eventos',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./eventos/';});
                }
                else if (jsonData.success == "3")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Caja',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./caja/';});
                }
                else if (jsonData.success == "4")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Biblioteca',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./biblioteca/';});
                }
                else if (jsonData.success == "5")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Centro de Cómputo',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./centro_computo/';});
                }
                else
                {
                    // alert('Invalid Credentials!');
                    Swal.fire({
                        icon: 'error',
                        title: 'Datos incorrectos',
                        text: 'Credenciales incorrectas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='index.html';});
                    // });
                }
           }
       });
     });
});