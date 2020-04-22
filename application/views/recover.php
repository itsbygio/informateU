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
<br>
<div class="container">
<div class="row justify-content-center align-items-center minh-100  " >
                    
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <form method="POST">
                          <div class="row">
                                    <div class="col-md-12 border" id="padding-form">
                                    <div class="row" >
                                                         <?php if (isset($_SESSION['message10'])) { ?>  
                                                                        <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message10']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                        </div>
                                    <div class="row" >
                                                         <?php if (isset($_SESSION['message8'])) { ?>  
                                                                        <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message8']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                        </div>
                                        <div class="row" >
                                                         <?php if (isset($_SESSION['message7'])) { ?>  
                                                                        <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message7']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                        </div>
                                    <div class="row" >
                                                         <?php if (isset($_SESSION['message5'])) { ?>  
                                                                        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message5']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                        </div>
                                                <div class="row d-flex justify-content-center">
                                                    <p> <strong>¿Tienes Problemas para entrar?</strong></n>
                                                    <p id="message-darkgrey">
                                                    Introduce tu nombre de usuario o direccion de correo electronico y 
                                                    te enviaremos un enlace para que recuperes el acceso a tu cuenta
                                                    </p>

                                                </div>
            
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'email' );  ?></div>
                                                    <input type="text" name="email" placeholder="Nombre de Usuario o email" class="form-control form-control">
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <button type="submit" class="btn btn-primary btn-block mb-2 ">Enviar enlace de acceso</button>
                                                </div>
                                                <div class="row justify-content-center">
                                                   o
                                                </div>
                                                <br>
                                                <div class="row justify-content-center ">
                                                <a href="<?php echo base_url()?>index.php/welcome/register" > Crear cuenta nueva</a>
                                                </div> 
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                    <div class="col-md-12 border" id="div-darkgrey">
                                                <div class="row justify-content-center" >
                                                 <p> <a href="<?php echo base_url()?>index.php/welcome/login">Volver al inicio de sesion</a> </p>
                                                </div>
                                    </div>
                            </div>
                    </div>
                
                    
        </div>
 </div> 
</body>
</html>