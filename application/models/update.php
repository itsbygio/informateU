<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Update extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('generateToken');
		
	}
public function updatePassword()
    {  
       $id= htmlspecialchars($_GET["id"]);
       $clave =  password_hash($this->input->post("clave"),PASSWORD_DEFAULT);
       $sql="UPDATE usuarios SET clave=?,token=? WHERE iduser=?";
       $result= $this->db->query($sql, array($clave,"NULL",$id));
      
       if($result){
          return true; 
       }
       else{
           return false;
       }

    }
    public function AddTimeRecover()
    {         
       date_default_timezone_set('America/Bogota');
       $DataNow=date("Y-m-d H:i:00");
       $email=$this->input->post("email");

       $sql="UPDATE usuarios SET DateTimeRecover= ADDTIME('$DataNow','1:00') WHERE email=?";
       $result= $this->db->query($sql, array($email));
       
    }
    public function UpdateActivated($id)
    {  
       $this->id=$id;
       $sql="UPDATE usuarios SET tipo=?,TokenActivate=? WHERE iduser=?";
       $this->db->query($sql, array("Activated","NULL",$id));

    }
    public function UpdateUser()
    {  
      $this->load->helper('quitarespacio');
      $email= $_SESSION['email'];       
      $nombre =Quitar_EspaciosNombre($this->input->post("nombre"));
		$apellidos =Quitar_EspaciosApellido($this->input->post("apellidos"));
      $usuario= $this->input->post('usuario');
      $genero= $this->input->post('genero');
      $foto=$this->input->post('foto');
      $cumpleaños=$this->input->post('cumpleaños');
      $biografia=$this->input->post('biografia');
      $carrera=$this->input->post('carrera');

      $sql = "UPDATE usuarios SET nombre=?, apellidos=?, usuario=?, genero=?, foto=? , cumpleaños=?,biografia=?, idcarrera=? WHERE email=?"; 
      return $this->db->query($sql, array($nombre,$apellidos,$usuario,$genero,$foto,$cumpleaños,$biografia,$carrera,$email));

    }
}
?>