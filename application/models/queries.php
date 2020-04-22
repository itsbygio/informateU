<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Queries extends CI_Model{

    public function GetFilasUser($email)
    {
        $this->email=$email;
        $sql = "SELECT * FROM usuarios WHERE email = ? OR usuario=? "; 
        return $this->db->query($sql, array($email,$email));
    }

    


     public function Validation_login($email,$clave)
    {
       $this->email=$email;
       $this->clave=$clave;
       $sql="SELECT*FROM usuarios WHERE email=? OR usuario=?";
       $result=$this->db->query($sql, array($email,$email));
       $row=$result->row();
       $claveDB=$row->clave;
       if(password_verify($clave,$claveDB)){
            return true;
       }
       else{
           return false;
       }
    }
    public function isActivatedUser($email)
    {
        $this->email=$email;
        $sql="SELECT*FROM usuarios WHERE email=?";
        $result=$this->db->query($sql, array($email));
        $row=$result->row();
        $tipo=$row->tipo;
        if($tipo==="NoActivated"){
         return false;
        }
        else{
          return true;
        }

    }
    public function email_existDB()
    {
        $email =$this->input->post("email");
        $sql = "SELECT * FROM usuarios WHERE email = ?"; 
        $result=$this->db->query($sql, array($email))->num_rows();
        if($result===1){
         return true;
        }
        else{
          return false;
        }
    }
    public function User_Exist()
    {
        $usuario=$this->input->post('usuario');
        $email= $_SESSION['email'];       
        $sql="SELECT* FROM usuarios WHERE usuario=?";
        $result=$this->db->query($sql, array($usuario))->num_rows();
        $this->load->model('gets');
        $row=$this->gets->getRowUser()->row();

        if($result===1 && $row->usuario!=$usuario){
            return false;
        }
        else{
            return true;
        }
    
      
    }
    public function ValidationURL()
    {   
        if(htmlspecialchars($_GET["t"])&& htmlspecialchars($_GET["id"])){
            $token=htmlspecialchars($_GET["t"]);
            $id=htmlspecialchars($_GET["id"]);
            $sql = "SELECT * FROM usuarios WHERE iduser=?"; 
            $result=$this->db->query($sql, array($id));
            $row=$result->row();
                       if(password_verify($token,$row->token)){
                        return true;
                       }
                       else{
                        return false;
                       }
            }
            else{
                return false;
            }
    }
    public function ValidationURLActivate()
    {   
            if(htmlspecialchars($_GET["t"])&& htmlspecialchars($_GET["id"])){
            $token=htmlspecialchars($_GET["t"]);
            $id=htmlspecialchars($_GET["id"]);
            $sql = "SELECT * FROM usuarios WHERE iduser=?"; 
            $result=$this->db->query($sql, array($id));
            $row=$result->row();
                       if(password_verify($token,$row->TokenActivate)){
                        $this->load->model('update');
                        $this->load->model('events');
                        $this->update->UpdateActivated($id);
                         $this->events->DropEventDeleteUser($id);
                        return true;
                       }
                       else{
                        return false;
                       }
            }
            else{
                return false;
            }
            
    }
    public function ValidationTimeRecover()
    {   
        
        $email =$this->input->post("email");
        $sql = "SELECT * FROM usuarios WHERE email=?";
        $row=$this->db->query($sql, array($email))->row();
        date_default_timezone_set('America/Bogota');
        $TimeRecover= strtotime($row->DateTimeRecover);
        $TimeNow= strtotime(date("Y-m-d H:i:00"));
         if($TimeNow>$TimeRecover){
         return true;
         }
         else{
         return false;
         }
    
    }
    public function GetTimeRemaingRecover($email)
    {   
        date_default_timezone_set('America/Bogota');
        $TimeNow=date("Y-m-d H:i:00");
        $this->email=$email;
        $sql = "SELECT * FROM usuarios WHERE email=?";
        $result=$this->db->query($sql, array($email));
        $row=$result->row();
        $DateTimeRecover=$row->DateTimeRecover;
        $sql2="SELECT TIMESTAMPDIFF(MINUTE,'$TimeNow','$DateTimeRecover') as minutos ";
        $result2=$this->db->query($sql2);
        $row=$result2->row();
        return $row->minutos;

 
    }


    
    
}
?>