<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('libraries/libraries')?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/css/estilos.css">

    <title>Login</title>
</head>
<body>
<style>
body{
margin-top:3%;
}
#messages-error{
font-size:12px;
color:red;
}
#padding-form{
padding:15%;
}
#div-darkgrey{
padding-top:2%; 
font-size:small; 
background-color:#E2DCDC;
}
#message-darkgrey{
font-size:small; 
color:darkgrey;    
}
</style>
<div class="container">
<div class="row justify-content-center align-items-center minh-100  " >
                 
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <form method="POST">
                          <div class="row">
                                    <div class="col-md-12 border" id="padding-form">
                                                <div class="row justify-content-center">
                                                    <p>Reestablece tu contraseña</p>
                                                    <p id="message-darkgrey">
                                                   Introduce tu nueva contraseña para reestablecer tu clave
                                                    </p>

                                                </div>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'clave' );  ?></div>
                                                    <input type="password" name="clave" placeholder="Nueva Contraseña" class="form-control form-control-sm">
                                                </div><br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'cclave' );  ?></div>
                                                    <input type="password" name="cclave" placeholder="Confirmar nueva contraseña" class="form-control form-control-sm">
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <button type="submit" class="btn btn-primary btn-block mb-2 btn-sm">Reestablecer </button>
                                                </div>
                                                <p id="message-darkgrey">
                                                Seras redirigido al inicio de sesion una vez reestablescas tu contraseña y te enviaremos un email avisando el cambio de clave
                                                </p>
                                               
                                    </div>
                                </form>
                            </div>
                            
                    </div>
                 
                    
        </div>
 </div> 
</body>
</html>