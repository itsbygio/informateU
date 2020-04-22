<?php 

function Auth(){
if(isset($_SESSION['email'])){
    return true;
  }
else{
 return false;
}
}
?>