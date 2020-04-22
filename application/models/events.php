<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class events extends CI_Model{

public function DropEventDeleteUser($id)
    {
    
        $this->id=$id;
        $sql1="SELECT *FROM usuarios WHERE iduser=? ";
        $result=$this->db->query($sql1, array($id));
        $row=$result->row();
        $usuario=$row->usuario;
        $sql2 ="DROP EVENT  IF EXISTS $usuario";
        $this->db->query($sql2);
       
    }
    public function EventDeleteUser($usuario){
    $this->usuario=$usuario;
      $sql="CREATE EVENT $usuario
      ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 HOUR
      DO
    DELETE FROM usuarios WHERE usuario='$usuario' < (CURRENT_TIMESTAMP - INTERVAL 1 HOUR)"  ;
    $this->db->query($sql);
   
    }
    
}
?>