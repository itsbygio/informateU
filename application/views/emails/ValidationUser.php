<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p style="font-size:15px;"> 
    Usted se ha registrado exitosamente en InformateU con el email:<?php  echo $email ?> pero necesitamos verificar que eres tu,
    recuerda que si no activas tu cuenta en 1 hora, la cuenta se eliminara.
    </p>
     <br>
     <a href="<?php echo $url?>">
           <button type="submit">
            Click Me!
            </button> 
    </a>    
</body>
</html>