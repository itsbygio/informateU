<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p style="font-size:15px;"> 
    Usted ha solicitada un cambio de contraseña de Interatic en su email: <?php  echo $email ?>
     si es usted por favor dar click en el link para reestablecer en su cuenta
    </p>
     <br>
   <a href="<?php  echo $url ?>">
     <button type="submit">
    Click Me!
    </button> 
    </a>    
</body>
</html>