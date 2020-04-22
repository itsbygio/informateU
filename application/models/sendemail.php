<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Sendemail extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		
	}
public function sendEmail()
    {  
        $this->load->helper('generateToken');
        $email =$this->input->post("email");
        $token= generateToken();
        
        $sql1 = "SELECT * FROM usuarios WHERE email = ? "; 
        $result= $this->db->query($sql1, array($email));
        $row=$result->row();
        $iduser= $row->iduser;
        $nombre=$row->nombre;
        $apellidos=$row->apellidos;
        $url = 'http://localhost/InformateU/index.php/welcome/recoverpass?&t='.$token.'&id='.$iduser;

        $sql2="UPDATE usuarios SET token=? WHERE email=?";
        $this->db->query($sql2, array(password_hash($token,PASSWORD_DEFAULT), $email));   
       
        $datos['nombre'] = $nombre;
        $datos['apellidos'] = $apellidos;
        $datos['email'] = $email;
        $datos['url'] = $url;

        $this->load->library('email');
        $this->email->from('gioangil@gmail.com', 'Miguel');
        $this->email->to($email);	
        $this->email->subject('Restablecimiento de la clave');
        $this->email->set_mailtype("html");
        $this->email->message($this->load->view('emails/recoverEmail',$datos, true));
        $this->email->send();
    }
    public function SendPasswordchanged()
    {  
        $iduser= htmlspecialchars($_GET["id"]);        
        $sql="SELECT * FROM usuarios WHERE iduser = ?";
        $result=$this->db->query($sql, array($iduser));   
        $row=$result->row();
        $datos['email'] = $row->email;
        $datos['nombre'] = $row->nombre;
        $datos['apellidos'] = $row->apellidos;

      
        $this->load->library('email');
        $this->email->from('gioangil@gmail.com', 'Miguel');
        $this->email->to($row->email);	
        $this->email->subject('Su cuenta ha sido reestablecida con exito');
        $this->email->set_mailtype("html");
        $this->email->message($this->load->view('emails/password_changed',$datos, true));
        $this->email->send(); 
    }
    public function SendValidationUser($emailDB,$TokenActivate,$iduser)
    { 
    $this->emailDB=$emailDB;
    $this->TokenActivate=$TokenActivate;
    $this->iduser=$iduser;
    $url = 'http://localhost/InformateU/index.php/welcome/AccountActivated?&id='.$iduser.'&t='.$TokenActivate;
    $datos['url'] = $url;
    $datos['email'] = $this->emailDB;

    $this->load->library('email');
    $this->email->from('gioangil@gmail.com', 'Miguel');
    $this->email->to($emailDB);	
    $this->email->subject('Verifica tu cuenta de InformateU ');
    $this->email->set_mailtype("html");
    $this->email->message($this->load->view('emails/ValidationUser',$datos,true));
    $this->email->send(); 
    }
   
 }
?>