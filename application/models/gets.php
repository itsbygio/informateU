<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class gets extends CI_Model{

public function getRowUser()
    {

        $email= $_SESSION['email'];       
        $sql = "SELECT * FROM usuarios WHERE email = ? OR usuario=? "; 
        return $this->db->query($sql, array($email,$email));
       

    }
    public function getCarreras()
    {   $this->load->model('gets');
        $result= $this->gets->getByidCarrera();
        $row=$result->row();
        $email= $_SESSION['email'];       
        $sql = "SELECT *FROM carreras WHERE carrera<>?"; 
        return $this->db->query($sql, array($row->carrera));

    }
    public function getByidCarrera()
    {
       $email= $_SESSION['email'];       
       $sql="SELECT carrera FROM carreras LEFT OUTER JOIN usuarios ON carreras.idcarrera=usuarios.idcarrera WHERE usuarios.email=? OR usuarios.usuario=?";
       return $this->db->query($sql, array($email,$email));
      
    }
   
}
?>