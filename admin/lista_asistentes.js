function valorTipoAsistente(){
    if(document.getElementById("radio1").checked){
        document.getElementById("nombre").disabled = false;
        document.getElementById("apellidos").disabled = false;
        document.getElementById("curp").disabled = false;
        document.getElementById("tipo_sangre").disabled = false;
        document.getElementById("semestre").disabled = false;
        document.getElementById("grupo").disabled = false;
        document.getElementById("unidad_academica").disabled = false;
        document.getElementById("num_control").disabled = false;
        document.getElementById("carrera").disabled = false;
    }
    else if (document.getElementById("radio2").checked){
        document.getElementById("nombre").disabled = false;
        document.getElementById("apellidos").disabled = false;
        document.getElementById("curp").disabled = false;
        document.getElementById("tipo_sangre").disabled = false;
        document.getElementById("semestre").disabled = true;
        document.getElementById("semestre").required = true;
        document.getElementById("grupo").disabled = true;
        document.getElementById("grupo").required = true;
        document.getElementById("unidad_academica").disabled = false;
        document.getElementById("unidad_academica").required = false;
        document.getElementById("num_control").disabled = false;
        document.getElementById("carrera").disabled = true;
        document.getElementById("carrera").required = true;
    }
    else if (document.getElementById("radio3").checked){
        document.getElementById("nombre").disabled = false;
        document.getElementById("apellidos").disabled = false;
        document.getElementById("curp").disabled = false;
        document.getElementById("tipo_sangre").disabled = false;
        document.getElementById("semestre").disabled = true;
        document.getElementById("semestre").required = true;
        document.getElementById("grupo").disabled = true;
        document.getElementById("grupo").required = true;
        document.getElementById("unidad_academica").disabled = false;
        document.getElementById("num_control").disabled = false;
        document.getElementById("carrera").disabled = true;
        document.getElementById("carrera").required = true;
    }
    else if (document.getElementById("radio4").checked){
        document.getElementById("nombre").disabled = false;
        document.getElementById("apellidos").disabled = false;
        document.getElementById("curp").disabled = false;
        document.getElementById("tipo_sangre").disabled = false;
        document.getElementById("semestre").disabled = true;
        document.getElementById("semestre").required = true;
        document.getElementById("grupo").disabled = true;
        document.getElementById("grupo").required = true;
        document.getElementById("unidad_academica").disabled = true;
        document.getElementById("unidad_academica").required = true;
        document.getElementById("num_control").disabled = true;
        document.getElementById("num_control").required = true;
        document.getElementById("carrera").disabled = true;
        document.getElementById("carrera").required = true;
    }
}
// solo números
function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 49)) 
      event.returnValue = false;
}

//   VALIDACIÓN CURP
        function validarInput(input) {
            var curp = input.value.toUpperCase(),
                resultado = document.getElementById("result-username"),
                valido = "No válido";
                
            // if (curpValida(curp)) {
            //     valido = "Válido";
            //     resultado.innerHTML ='<div class="alert alert-success text-start"><strong><i class="bi bi-check-square"></i> CORRECTO. </strong> Cadena CURP correcta.</div>';
            // } else {
            //     resultado.innerHTML = '<div class="alert alert-danger"><strong><i class="bi bi-exclamation-triangle-fill"></i> ERROR. </strong> Cadena CURP incorrecta.</div><style>#boton_submit{display:none;}</style>';
            // }
            if (curpValida(curp)) {
                valido = "Válido";
                alert("CURP válida");
                document.getElementById("botonRegistro").disabled = false;
                document.getElementById("CURPvalida").hidden = false;
                document.getElementById("CURPNovalida").hidden = true;
                elem = document.getElementById("curp");
                elem.setAttribute("style","");
            } else {
                alert("CURP No válida");
                document.getElementById("botonRegistro").disabled = true;
                document.getElementById("CURPvalida").hidden = true;
                document.getElementById("CURPNovalida").hidden = false;
                elem = document.getElementById("curp");
                elem.setAttribute("style","border-color: rgb(240,93,93);border: 4px solid #fa0000;box-shadow: 0px 4px 5px 0px rgba(255,0,0,0.63);");
                
            }
                
        }
    function curpValida(curp) {
        var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
            validado = curp.match(re);
        
        if (!validado)  //Coincide con el formato general?
            return false;
        
        //Validar que coincida el dígito verificador
        function digitoVerificador(curp17) {
            //Fuente https://consultas.curp.gob.mx/CurpSP/
            var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
                lngSuma      = 0.0,
                lngDigito    = 0.0;
            for(var i=0; i<17; i++)
                lngSuma= lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
            lngDigito = 10 - lngSuma % 10;
            if(lngDigito == 10)
                return 0;
            return lngDigito;
        }
        if (validado[2] != digitoVerificador(validado[1])) 
            return false;
            
        return true; //Validado
    }

    // VALIDA USUARIO REGISTRADO
 
    $(document).ready(function() {	
        $('#curp').on('blur', function() {
            $('#result-username2').html('<img src="img/loader.gif" />').fadeOut(1000);
    
            var username = $(this).val();		
            var dataString = 'username='+username;
    
            $.ajax({
                type: "POST",
                url: "prcd/verficacion.php",
                data: dataString,
                success: function(data) {
                    $('#result-username2').fadeIn(1000).html(data);
                }
            });
        });              
    });    