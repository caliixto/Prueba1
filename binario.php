<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="formulario" method="post" action="">
    <label>Numero Decimal</label>
    <input name="decimal" id="decimal">
    <br><br>
    <input type="submit" id="button" value="Enviar">
    <input type="reset"  name="reset"  value="Reset">
    </form>


    <?php

    if(isset($_POST["button"])){
    
      $numerodecimal=$_POST["decimal"];
      $resultado=decbin($numerodecimal);
    
      echo "El numero binario es: "  . $resultado;
    
    }
    
    ?>
</body>
</html>