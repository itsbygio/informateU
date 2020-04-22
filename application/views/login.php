<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="<?php echo base_url("images/icono.png")?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('libraries/libraries')?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/css/estilos.css">
    <title>Login</title>
</head>
<body background="<?php echo base_url("/images/fondo.jpg")?> ">


<div class="container">
<br>
        <div class="row  justify-content-center align-items-center minh-100  " >
                
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    
                          <div class="row ">
                                    <div class="col-md-12 border bg-light mb-3 " id="padding-form">
                                    <form method="POST">
                                                <div class="row" >
                                                <?php if (isset($_SESSION['message12'])) { ?>  
                                                                        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message12']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                                <?php if (isset($_SESSION['message9'])) { ?>  
                                                                        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message9']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                                         <?php if (isset($_SESSION['message4'])) { ?>  
                                                                        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message4']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                                            <?php if (isset($_SESSION['message'])) { ?>  
                                                                        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>
                                                            <?php if (isset($_SESSION['message2'])) { ?>  
                                                                        <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message2']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php session_unset(); } ?>

                                                </div>
                                                <div class="row  justify-content-center">
                                                 <img height="130px" width="350px"src="<?php echo base_url("/images/logo.png")?>"> </img>
                                                </div><br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'usuario' );  ?></div>
                                                    <input type="text" name="email" placeholder="Nombre de Usuario o email" class="form-control form-control" >
                                                </div>
                                                
                                                <br>
                                                <div class="row">
                                                <div id="messages-error"><?php  echo  form_error ( 'clave' );  ?></div>

                                                    <input type="password" name="clave" placeholder="Clave o password" class="form-control form-control" >


                                                </div><br>
                                                <div class="row">
                                                    <button type="submit" style="font-family:Arial; " class="btn btn-primary btn-block mb-2 ">Iniciar Sesion</button>
                                                </div>
                                                <div class="row justify-content-center">
                                                   
                                                </div>
                                                <br>
                                                <div class="row justify-content-center ">
                                                <a href="<?php echo base_url()?>index.php/welcome/recover"> ¿Has olvidado tu contraseña? </a>
                                                </div>                                                
                                        </form>                                        
                                    </div>
                            </div>
                            
                            <div class="row">
                                    <div class="col-md-12 border" id="div-darkgrey">
                                                <div class="row justify-content-center" >
                                                 <p  > ¿No tienes cuenta? <a href="<?php echo base_url()?>index.php/welcome/register">Registrate aqui</a> </p>
                                                </div>
                                    </div>
                            </div>
                    </div>
                    
                    
        </div>
    </div>
    <br>
</body>
</html>