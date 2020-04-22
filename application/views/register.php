<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('libraries/libraries')?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/css/estilos.css">
    <title>Registro</title>
</head>
<body>
<br>
<div class="container">
        <div class=" row justify-content-center align-items-center minh-100">
                <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="row">
                                    <div class="col-md-12 border" id="padding-form-register">
                                               
                                                <div class="row">
                                                    <p style="font-size:18px;" >Registrate</h5>
                                                </div>
                                                <form method="POST">
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'email' );  ?></div>
                                                    <input type="text" name="email" placeholder="Email o correo electronico" class="form-control form-control" value="<?php echo set_value('email'); ?>">
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'nombre' );  ?></div>
                                                    <input type="text" name="nombre" placeholder="Nombre " class="form-control form-control" value="<?php echo set_value('nombre'); ?>">

                                                </div><br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'apellidos' );  ?></div>
                                                    <input type="text" name="apellidos" placeholder="Apellidos " class="form-control form-control" value="<?php echo set_value('nombre'); ?>">

                                                </div><br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'usuario' );  ?></div>
                                                    <input type="text" name="usuario" placeholder="Nombre de usuario " class="form-control form-control" value="<?php echo set_value('usuario'); ?>">

                                                </div><br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'clave' );  ?></div>
                                                    <input type="password" name="clave" placeholder="Password" class="form-control form-control" >

                                                </div><br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'cclave' );  ?></div>
                                                    <input type="password" name="cclave" placeholder="Confirmar password" class="form-control form-control">

                                                </div><br>
                                                <div class="row">
                                                    <div id="messages-error"><?php  echo  form_error ( 'foto' );  ?></div>
                                                    <input type="file" name="foto"  class="form-control form-control" 
                                                   placeholder="Cargar Archivo" value="<?php echo set_value('foto'); ?>">

                                                </div><br>
                                                <div class="row">
                                                    <button type="submit" class="btn btn-primary btn-block mb-2">Registrar</button>
                                                </div>
                                                </form>

                                                <div class="row justify-content-center">
                                                   
                                                </div><br>
                                                <div class="row justify-content-center ">
                                                </div> 
                                    </div>
                            </div>
                            <div class="row ">
                                    <div class="col-md-12 border" id="div-darkgrey">
                                                <div  class="row justify-content-center" >
                                                 <p > ¿ Ya tienes cuenta? <a   href="<?php echo base_url()?>index.php/welcome/login">Inicia Sesion aqui</a> </p>
                                                </div>
                                    </div>
                            </div>
                    </div>
                 
                    
                    
        </div>
 </div> 
</body>
</html>