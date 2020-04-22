
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="<?php echo base_url("images/icono.png")?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/stylenav.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/fonts.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url()?>/js/main.js"> </script>
    <title>Home</title>
    
</head>
<body>
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
       
        

    
</body>
<br><br><br>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et nulla massa. Quisque at laoreet lectus. Donec tincidunt sit amet est sed aliquet. Mauris non justo in neque placerat consequat. Maecenas tempus at odio et bibendum. Integer sit amet tristique ipsum, at ultrices nibh. Sed finibus rhoncus sapien eget accumsan. In ut urna sem.

Maecenas sit amet accumsan velit. Pellentesque gravida eu ex id facilisis. Nunc vitae eros maximus, fermentum est non, porta justo. Suspendisse id iaculis orci, in facilisis augue. Curabitur neque lacus, porttitor et augue a, efficitur maximus ligula. Ut pellentesque finibus enim. Mauris aliquet feugiat orci, ac euismod nulla hendrerit et. Maecenas pulvinar dui eu purus vestibulum, sed auctor elit pharetra. Vivamus eu dignissim ligula. Aliquam tortor sem, vestibulum quis placerat id, congue a nulla. Etiam vulputate erat eros. In hac habitasse platea dictumst. Duis tempus viverra rutrum. Fusce pellentesque turpis et enim luctus consequat.

Curabitur vulputate lorem eget volutpat semper. Duis facilisis id dui eu interdum. Vestibulum varius turpis vitae malesuada lacinia. Sed feugiat diam felis, eget scelerisque mi blandit ut. Curabitur eleifend libero non ipsum faucibus, vel varius nibh convallis. Cras congue ante dui, at pharetra purus venenatis nec. Vivamus euismod finibus massa eget egestas.

Aliquam suscipit velit et diam aliquam, id molestie neque ullamcorper. Curabitur risus leo, venenatis ut nunc sit amet, congue congue purus. Ut ut risus imperdiet, cursus arcu sed, fringilla ex. Nulla facilisi. Sed et tortor non leo dignissim accumsan sed vitae mi. Sed blandit ipsum at magna tempor, at lobortis metus malesuada. Mauris fringilla lectus id elit mattis venenatis. Fusce rutrum eros non finibus ultrices. Vivamus diam felis, cursus quis velit in, bibendum efficitur ipsum. Donec nec tincidunt ligula. Phasellus laoreet, arcu et varius fermentum, lectus erat congue felis, non suscipit sapien massa et justo. Donec sagittis lorem sit amet lectus tristique sodales vitae hendrerit massa.

Phasellus non consequat risus. Quisque elementum odio felis, iaculis porttitor sapien sagittis quis. Nunc tellus nunc, viverra quis massa ac, tincidunt convallis metus. Vestibulum at ante nec massa consectetur vehicula. Morbi quis placerat lorem. In vitae diam suscipit, blandit purus ut, scelerisque nisi. Phasellus viverra semper leo, sit amet viverra ligula interdum nec. Phasellus ut varius quam. Sed tincidunt sapien a nisl dictum tempor. Sed ipsum sapien, blandit in diam vitae, vehicula interdum est. Sed quis est id augue porttitor mollis.

Nulla vitae varius lacus. Morbi sit amet magna eu sem molestie blandit quis ut justo. Cras sagittis ligula id maximus fermentum. Suspendisse iaculis leo non nibh viverra feugiat. Integer porta enim ut finibus malesuada. Aliquam a lorem vitae quam dictum elementum id nec dui. Mauris accumsan libero at urna laoreet aliquam. Quisque ut sollicitudin dolor. Nullam tincidunt lorem felis, nec dignissim mauris sollicitudin id. Cras aliquet mollis ornare. Fusce sit amet iaculis leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sed nisl hendrerit odio luctus viverra. Maecenas pulvinar egestas sapien, vitae fermentum sapien bibendum ut. Nulla facilisi. Mauris placerat ligula eu nulla eleifend, in ullamcorper diam vestibulum.

Aenean odio ligula, dapibus at libero eu, venenatis placerat ante. Maecenas auctor bibendum erat, dignissim maximus nibh auctor vitae. Praesent tincidunt est lorem, in suscipit elit egestas vitae. Etiam dictum fringilla aliquet. Mauris suscipit neque eget auctor pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non neque purus. Nullam iaculis tempus est eu tempor. Vivamus vitae diam faucibus, porta mauris id, faucibus tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus lectus nisi, ultrices vel consectetur tincidunt, sodales in ipsum.

Fusce sit amet tellus quis arcu euismod lacinia. Duis non enim at enim facilisis condimentum vitae at dui. Donec quis metus vitae eros porta hendrerit vitae et arcu. Donec commodo dui sed convallis iaculis. Ut mollis sit amet mauris quis eleifend. Ut maximus magna enim, commodo sodales urna vestibulum non. Nunc laoreet arcu a tortor dictum blandit. Nulla at ante leo. Ut molestie euismod lorem eget tincidunt.

Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ultricies lobortis ullamcorper. Nam eu leo vulputate, ullamcorper mi ac, pellentesque dolor. Phasellus rhoncus, elit eget condimentum posuere, leo leo viverra tellus, et lacinia risus nibh et nisi. Proin accumsan, ligula vitae pellentesque rutrum, tellus tortor cursus tortor, eget bibendum nisi urna sed libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at ante eu turpis elementum dictum. Donec imperdiet dolor mauris. Ut suscipit nibh in ornare consequat. Nulla sit amet velit eget risus tristique varius vel lobortis est. Phasellus molestie magna id elit accumsan mattis. Mauris mollis dolor eu diam hendrerit rutrum. Donec non odio viverra, fermentum turpis ut, eleifend elit. Aliquam erat volutpat. Nulla finibus pulvinar ultricies.

Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum orci nisi, facilisis in nulla et, malesuada porttitor leo. Donec ultrices urna at risus mollis, eget venenatis ligula consequat. Cras sed urna quam. Vivamus eget volutpat massa, non bibendum tellus. In hac habitasse platea dictumst. Cras a leo imperdiet, consectetur arcu et, imperdiet diam. Praesent vulputate porttitor facilisis. Sed convallis porttitor arcu, quis mattis magna tempus vel. Pellentesque ut mauris eget quam imperdiet semper. Nullam euismod lorem pretium, posuere augue sit amet, posuere ligula. Etiam eget purus sed arcu accumsan ullamcorper. Nunc laoreet condimentum nisl, id pharetra lacus efficitur nec. Pellentesque luctus, odio vitae ultrices efficitur, lacus est rutrum nisi, vitae laoreet risus lectus sit amet sem.
</html>