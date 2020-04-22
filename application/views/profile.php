<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <?php $this->load->view('libraries/libraries')?>
        <link rel="icon" type="image/png" href="<?php echo base_url("images/icono.png")?>"/>
    <link rel="stylesheet" href="<?php echo base_url()?>/css/stylenav.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/estilos.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url()?>/js/main.js"> </script>
    <title>Profile</title>
    
</head>
<body>
<style>

</style>

<header>
             

             <div class="menu_bar">
                     <a href="#" class="bt-menu"><i class="fas fa-bars"></i> Menu</a>
             </div>

             <nav>
                 
                         <ul>

                             <li>
                                 <a href="<?php  echo base_url()?>index.php/welcome"><i class="fas fa-home"></i> Home</a>
                             </li>
                             <?php foreach($usuarios->result() as $row){?>                                          
                             <li  id="posicion" class="submenu">
                                 <a href="#"> <img  height="32px" width="32px" src="<?php echo base_url("./images/$row->foto")?>"> </img><?php echo $row->usuario ?> <i class="fas fa-chevron-down"></i></a>
                                 <ul id="hidden" class="children">
                                 <li id="hidden-li">
                                 <?php }?>
                                    <a href="<?php  echo base_url()?>index.php/welcome"> <i class="fas fa-home"></i> Home</a>
                                   </li>  
                                     <li> <a href="<?php  echo base_url()?>index.php/user/profile"><i class="fas fa-user-circle"></i> Mi cuenta</a></li>
                                     <li><a href="<?php  ECHO base_url()?>index.php/welcome/logout"> <i class="fas fa-power-off"></i> Cerrar sesion</a></li>
                                 </ul>
                             </li>
                             
                            
                             

                                  
                         </ul>
                     

             </nav>
   
    
               
 </header>
    <br><br><br><br>
       <div class="container ">
                  <div class="row justify-content-center ">
                            <div class="col-sm-12 col-md-10  border-right  border-left">
                                       <div class="row">
                                                <div class="col-md-12">
                                                 <h3> Editar perfil </h3>
                                                </div>
                                        </div><br>
                                                <form method="POST">
                                                <?php foreach($usuarios->result() as $row){?>
                                               <?php
                                                   $cadena1="images/";
                                                   $cadena2=$row->foto;
                                                   $resultado=$cadena1 . $cadena2;                         
                                                  ?>
                                                  <div class="row">
                                        
                                                <div id="div-img" class="col-md-4">
                                                 <img id="img-profile" src="<?php echo base_url("$resultado")?>"> </img>
                                                 <br>                                                                        
                                                 <br>
                                                  
                                                 
                                                <!-- <button type="button" class="btn btn-primary mb-2 " data-toggle="modal" data-target="#exampleModal">
                                                  Subir foto</button>!-->
                                                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                                                   <div class="modal-dialog" role="document">
                                                    <div class="modal-content">  
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST" action="<?php echo site_url("user/foto")?>">
      <?php foreach($usuarios->result() as $row){?>
        <img class="card-img-top" src="<?php echo base_url("./images/$row->foto")?>"> </img>
      <div class="modal-body">
      <input type="file" name="foto"  class="form-control" 
      placeholder="Cargar Archivo" value="<?php echo set_value('foto'); ?>">
      <?php }?>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
        <button type="submit" class="btn btn-success">guardar</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
                                                 
                                                 <?php }?>
                                                 </form>
                                                   <div class="row">
                                                     <div class="col-md-12">
                                                        <div class="list-group" id="list-tab" role="tablist">
                                                        <a class="list-group-item list-group-item-action active" href="" >Tus datos</a>
                                                        <a class="list-group-item list-group-item-action" href="<?php  echo base_url()?>index.php/user/profileAjustes" >Ajustes </a>
                                                       <!-- <a class="list-group-item list-group-item-action" href="<? /*php  echo base_url()*/?>index.php/user/profileAsignatura" >Asignaturas</a> !-->
                                                        </div>
                                                       </div>
                                                  </div>
                                        </div>
                                                <div class="col-md-8">
                                            
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="row">
                                                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                                            <div class="row" style ="margin-left:5px">
                                                              <div class="col-md-12">
                                                           
                                                              <?php if (isset($_SESSION['message14'])) { ?>  
                                                                        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert" style="padding-bottom:0%">
                                                                                    <p style="font-size:small"><?php echo $_SESSION['message14']; ?></p>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                        </div>
                                                            <?php unset($_SESSION['message14']); } ?>
                                                                  <h4>Tus datos</h4>
                                                                 
                                                                </div>
                                                         </div>
                                                         
                                                         <form action="" method="POST" enctype="multipart/form_data">
                                                        
                                                         <?php foreach($usuarios->result() as $row){?>
                                                          
                                                          <input type="file" name="foto"  class="form-control" 
                                                          placeholder="Cargar Archivo" value="<?php echo set_value('foto'); ?>">  
                                                         <div class="row" style ="margin-left:5px">
                                                              <div class="col-md-6">
                                                              <div id="messages-error"><?php  echo  form_error ( 'nombre' );  ?></div>

                                                                  <p>Nombres</p>
                                           
                                                                  <input type="text" name="nombre" value="<?php echo $row->nombre ?>"class="form-control" >
                                                                  <div id="messages-error"><?php  echo  form_error ( 'usuario' );  ?></div>
                                                                  <div id="messages-error">
                                                                  <?php if (isset($_SESSION['message16'])) { ?>
                                                                    <?php echo $_SESSION['message16']; ?>
                                                                   <?php unset($_SESSION['message16']); } ?>
  
                                                                  </div>
                                                                  <p>  Usuario</p>
                                                                  <input type="text" name="usuario" value="<?php echo $row->usuario ?>" class="form-control" >
                                                                  <p>Genero</p>
                                                                  <div  class="row ">
                                                                       
                                                                                    <div class="col-md-6">
                                                                                         <div class="col-md-12">
                                                         <input class="form-check-input" type="radio" name="genero" id="exampleRadios1" value="M" <?php if($row->genero=="M"){?>checked ><?php }?> 
                                                                                                    <label class="form-check-label" for="exampleRadios1">
                                                                                                    Male
                                                                                                    </label>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                         <div class="col-md-12">
                                                                                                <input class="form-check-input" type="radio" name="genero" id="exampleRadios2" value="F" <?php if($row->genero=="F"){?>checked ><?php }?>  
                                                                                                <label class="form-check-label" for="exampleRadios2">
                                                                                                    Female
                                                                                                </label>
                                                                                        </div>

                                                                                    </div>
                             
                                                                  </div>
                                                                 
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div id="messages-error"><?php  echo  form_error ( 'apellidos' );  ?></div>

                                                                   <p>Apellidos</p>
                                                                   <input type="text" name="apellidos" value="<?php echo $row->apellidos ?>" class="form-control " >
                                                                   <p>  Email</p>
                                                                  <input type="text"  value="<?php echo $row->email ?>"  class="form-control" disabled >
                                                                  <p>Cumpleaños </p>
                                                                  <input type="date" name="cumpleaños"  value="<?php echo $row->cumpleaños ?>" name="birthday" class="form-control" >
                                                                
                                                                </div>
                                                         </div>
                                                         <div style ="margin-left:5px" class="row" >
                                                             <div class="col-md-12">
                                                            <p>Biografia</p>
                                                            <input type="text" name="biografia" value="<?php echo $row->biografia ?>" class="form-control" >
                                                            </div>
                                                         </div>
                                                         <?php }?>
                                                         <div style ="margin-left:5px" class="row">
                                                             <div class="col-md-12">
                                    
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">¿Que estudias?</label>
                                                                <select id ="option" name="carrera" class="form-control" id="exampleFormControlSelect1">
                                                                <?php foreach($carreraUser->result() as $row2){?>
                                                                <option id="option" name="carrera" value="1"><?php echo $row2->carrera?></option>
                                                                <?php }?>
                                                                <?php foreach($carreras->result() as $row){?>
                                                                <option id="option" name="carerra" value="<?php echo $row->idcarrera?>"> <?php echo $row->carrera?></option>
                                                                <?php }?>
                                                               
                                                                </select>
                                                            </div>
                                                            <button type="submit"  style="font-family:Arial; " class="btn btn-primary mb-2 ">Guardar Cambios</button><br><br>
                                                            </form>
                                                            </div>
                                                         </div>
                                                     <div>
                                                  </div>   
                                            </div>
                                        </div>
                            </div>
                                                            
                                                        </div>
                              
                                                     </div>
                                                </div>
       </div>
   
</body>
</html>