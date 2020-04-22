<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();



	}
	public function login()
	{
		
    	$this->load->helper('Autenticate');
		$Auth= Auth();
		if($Auth){
		 redirect('Welcome');
		}
		else{
						$this->form_validation->set_rules('email','Nombre de usuario o email','required');
						$this->form_validation->set_rules('clave','Password','required');
						if($this->form_validation->run()==false){
						$this->load->view('login');
						}
						else{
						$this->load->model('queries');    	   
						$email=$this->input->post('email');				
						$clave=$this->input->post('clave');
						$ValidationLogin=$this->queries->Validation_login($email,$clave);
						$isActivatedUser=$this->queries->isActivatedUser($email);
							if($ValidationLogin){
									if($isActivatedUser){
								    session_start();
									$_SESSION['email']=$email;	
									redirect('Welcome');					
									}
									else{
										$_SESSION['message9'] = 'PorFavor Active su cuenta, se ha enviado a su email un enlace de verificacion.Recuerda que si la cuenta no se activa en 1 hora apartir del tiempo de registro tu cuenta sera eliminada.';
										redirect('Welcome/login');
									}
							}
							else{
								$_SESSION['message2'] = 'Usuario/email o clave incorrectas';
								redirect('Welcome/login');

							}	
							

						}		
		}
			
				 		         
	}
	
	
	function alpha_dash_space($fullname){
		if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
			$this->form_validation->set_message('alpha_dash_space', 'El campo %s  solo puede contener letras');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	
	public function register()
	{            
		$this->load->helper('Autenticate');
		$Auth= Auth();
		if($Auth){
			redirect('Welcome');
		}
		else{
					$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[usuarios.email]|max_length[60]');
					$this->form_validation->set_rules('nombre','Nombre','required|callback_alpha_dash_space|max_length[60]');
					$this->form_validation->set_rules('apellidos','Apellido','required|callback_alpha_dash_space|max_length[60]');
					$this->form_validation->set_rules('usuario','Usuario','required|min_length[5]|max_length[30]|is_unique[usuarios.usuario]|alpha_numeric');
					$this->form_validation->set_rules('clave','Clave','required|min_length[5]|max_length[50]');
					$this->form_validation->set_rules('cclave',' Confirmar clave','required|matches[clave]');
					if (empty($foto['foto']))
					{
						$this->form_validation->set_rules('foto','Foto','required');
					}
					
					
					if($this->form_validation->run()==false){
						$this->load->view('register');
					}
					else{
						$this->load->helper('quitarespacio');
						$this->load->helper('generateToken');
						$this->load->model('insert');
						$email=$this->input->post("email"); 
						$nombre =Quitar_EspaciosNombre($this->input->post("nombre"));
						$apellidos =Quitar_EspaciosApellido($this->input->post("apellidos"));
						$usuario =$this->input->post("usuario");
						$clave =$this->input->post("clave");
						$TokenActivate=generateToken();
						$foto =$this->input->post("foto");
						$result=$this->insert->InsertarUsuario($email,$nombre,$apellidos,$usuario,$clave,$TokenActivate,$foto);
						$config["upload_path"]="./images";
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
						if($result){
							$this->load->model('queries');
							$this->load->model('events');
							$this->load->model('sendemail');
							$this->events->EventDeleteUser($usuario);
							$row=$this->queries->GetFilasUser($email)->row();
							$iduser=$row->iduser;
							$emailDB=$row->email;
							$this->sendemail->SendValidationUser($emailDB,$TokenActivate,$iduser);
							
							redirect('Welcome/login');
								
						}
						else{
							echo "Ha ocurrido un error durante el registro";
						}
					
					}
		}
				
	}
	public function recover()
	{

		$this->load->helper('Autenticate');
		$Auth= Auth();
		if($Auth){
			redirect('Welcome');
		}
		else{
			$this->form_validation->set_rules('email','Email','required|valid_email');
			if($this->form_validation->run()==false){
				$this->load->view('recover');
			}
			else{
						$this->load->model('queries');
						$email=$this->input->post('email');
						$existDB=$this->queries->email_existDB();
						$ValidationTime=$this->queries->ValidationTimeRecover();
						$isActivatedUser=$this->queries->isActivatedUser($email);
						if($existDB) {
							if($isActivatedUser){
								if($ValidationTime){
									$this->load->model('sendemail');
									$this->load->model('update');
									$this->sendemail->sendEmail();
									$this->update->AddTimeRecover();
									$_SESSION['message5'] = 'Hemos enviado un enviado un correo a tu email para reestablecer tu contraseña';
									redirect('Welcome/recover');
									}
									else {
									$email=$this->input->post('email');
									$TimeRemaing=$this->queries->GetTimeRemaingRecover($email);
									$_SESSION['message7'] = 'Faltan '.$TimeRemaing.' minutos para volver a enviar un enlace de recuperacion';
									redirect('Welcome/recover');
									}

							}
							else{
								$_SESSION['message10'] = 'La cuenta no esta activada, por favor activela';
								redirect('Welcome/recover');
							}

						
									
						}
						else{
								$_SESSION['message8'] = 'El email ingresado no esta registrado';
								redirect('Welcome/recover');
						}
					}
		}
				
								
}

	public function recoverpass()
	{  
		$this->load->model('queries');
		$validationURL=$this->queries->ValidationURL();
		if($validationURL){
			            $this->form_validation->set_rules('clave','Clave','required');
						$this->form_validation->set_rules('cclave','Confirmar clave','required|matches[clave]');
						if($this->form_validation->run()==false){
						$this->load->view('recoverpass');
						}
						else{
							$clave=$this->input->post("clave"); 
							$this->load->model('update');
							$result=$this->update->updatePassword();
							 if($result){
							  $this->load->model('sendemail');
							  $this->sendemail->SendPasswordchanged();
                              redirect('Welcome/login');
							 }
							 else{
                              echo "no se pudo reestablecer su contraseña, intente de nuevo";
							 }

						}
		}
		else{
            redirect('Welcome/error404');
                    
		}
				
	}
	
	public function index()
	{
		$this->load->model('gets');
		$data=array(
            'carreras'=> $this->gets->getCarreras(),
            'usuarios'=>$this->gets->getRowUser(),
            'carreraUser'=>$this->gets->getByidCarrera()
        );
		$this->load->helper('Autenticate');
		
		$Auth= Auth();
		if($Auth){
			
			$this->load->view('index',$data);
			
		}
		else{
			redirect('Welcome/login');
		}

	}
	public function AccountActivated()
	{
		$this->load->model('queries');
		$validation=$this->queries->ValidationURLActivate();
		if($validation){
			$this->load->view('AccountActivated');
		}
		else{
            redirect('error404');
		}		

	}
	public function error404()
	{
	    $this->load->view('erros/html/error_404');

	}
	public function logout()
	{
		$this->session->set_userdata('email');
		$this->session->sess_destroy();
		session_unset ();
		redirect('Welcome/login');

	}
}
