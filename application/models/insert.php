<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Insert extends CI_Model{

public function InsertarUsuario($email,$nombre,$apellidos,$usuario,$clave,$TokenActivate,$foto)
    {

        date_default_timezone_set('America/Bogota');
        $DataRegister=date("Y-m-d H:i:00");
        $this->email=$email;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->usuario=$usuario;
        $this->clave=$clave;
        $this->TokenActivate=$TokenActivate;
        $this->foto=$foto;
        $data=[ 
            'nombre'=>$nombre,
            'apellidos'=>$apellidos,
            'usuario'=>$usuario,
            'email'=>$email,
            'clave'=> password_hash($clave,PASSWORD_DEFAULT/*,array("cost"=>12)  */),
            'data_register'=>$DataRegister,
            'DateTimeRecover'=>$DataRegister,
            'TokenActivate'=>password_hash($TokenActivate,PASSWORD_DEFAULT),
            'token' => 'NULL',
            'foto'=>$foto,
            'tipo'=>'Activated',
            
            'idcarrera'=> 10000

        ];
        return  $this->db->insert('usuarios',$data);
    
       
    }
}
?>