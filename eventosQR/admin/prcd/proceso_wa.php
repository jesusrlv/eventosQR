<?php
//TOKEN QUE NOS DA FACEBOOK
$token = 'EAALiprCubn0BAGZAjdilPZAfg2VZBCZA8sqn7vcBS71iRGCepjA7W7yLKZABahTz3cZAnpAhm3cbtyD8WCiUfFld2cgs2CZAfggyZCr9xAcZAJk4ASSZBuLgZAJio39bPNqSZBg9loqYBUhAqjZALrn2y4kwAZCZCRv2p9OKab9q9ZBeAMDYcYrfdWBWbktBmFCNqzqOuC39FZBMZBuCvg8wZDZD';
//NUESTRO TELEFONO
$telefono = '524921001418';
//URL A DONDE SE MANDARA EL MENSAJE
$url = 'https://graph.facebook.com/v17.0/110198628776093/messages';

//CONFIGURACION DEL MENSAJE
$mensaje = ''
        . '{'
        . '"messaging_product": "whatsapp", '
        . '"to": "'.$telefono.'", '
        . '"type": "template", '
        . '"template": '
        . '{'
        . '     "name": "hello_world",'
        . '     "language":{ "code": "en_US" } '
        . '} '
        . '}';
//DECLARAMOS LAS CABECERAS
$header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
//INICIAMOS EL CURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
$response = json_decode(curl_exec($curl), true);
//IMPRIMIMOS LA RESPUESTA 
print_r($response);
//OBTENEMOS EL CODIGO DE LA RESPUESTA
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//CERRAMOS EL CURL
curl_close($curl);
?>