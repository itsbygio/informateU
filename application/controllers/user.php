<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();



    }
    function alpha_dash_space($fullname){
		if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
			$this->form_validation->set_message('alpha_dash_space', 'El campo %s  solo puede contener letras');
			return FALSE;
		} else {
			return TRUE;
		}
	}

    public function profile(){
        $this->load->model('gets');
        
      /*  $config["upload_path"]="./images";
        $config["allowed_types"]="jpg|png";
        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('foto')){
            echo $this->upload->display_errors();
			echo $config["upload_path"];
			
        }
        else{
			echo "archivo_cargado";
			$foto=$this->upload->data('foto');
        }
        */
        $data=array(
            $this->subirfoto(),
            'carreras'=> $this->gets->getCarreras(),
            'usuarios'=>$this->gets->getRowUser(),
            'carreraUser'=>$this->gets->getByidCarrera()
        );
    
		$this->form_validation->set_rules('nombre','Nombre','required|callback_alpha_dash_space|max_length[60]');
        $this->form_validation->set_rules('apellidos','Apellido','required|callback_alpha_dash_space|max_length[60]');
        $this->form_validation->set_rules('usuario','Usuario','required|min_length[5]|max_length[30]|alpha_numeric');
        if (empty($_FILES['foto']))
        {
            $this->form_validation->set_rules('foto', 'Foto');
        }
	    
					
       
        if($this->form_validation->run()==false){
            $this->load->view('profile',$data);
        }
        else{
           
            $this->load->model('queries');
            
             $result=$this->queries->User_Exist();

              if($result){
                                $this->load->model('update');
                                $result= $this->update->UpdateUser();
                                if($result){
                                    $_SESSION['message14'] = 'Tus datos se han actualizado correctamente';
                                    
                                    redirect('user/profile');
                                }
                                else{
                                    echo "Su actualizacion no ha sido exitosa";
                                }
                            }

                    else{
                        $_SESSION['message16'] = 'El usuario que ha ingresado ya existe';
                        redirect('user/profile');

                    }
        }
       
    } 
    public function profileAjustes(){
        $this->load->model('gets');
        $data=array(
            'carreras'=> $this->gets->getCarreras(),
            'usuarios'=>$this->gets->getRowUser(),
            'carreraUser'=>$this->gets->getByidCarrera()
        );
        
        $this->load->view('profile-ajustes',$data);
       
    }

    private function subirfoto(){
        $mi_archivo = 'foto';
        $config['upload_path'] = "images/";        
        $config['allowed_types'] = "jpg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
    }
    }

    /*
    public function profileAsignatura(){
        
        $this->load->view('profile-asignatura');
    }
    */

?>