function busquedaAdmin(){
    var busqueda = document.getElementById('busquedaAdmin1').value;

    $.ajax({
        type:"POST",
        url:"query/query_busqueda.php",
        data:{
            busqueda:busqueda
        },
        dataType: "html",
        cache: false,
          success: function(data) {
            $("#txtHint").html(data);                  
          }               
        });
}