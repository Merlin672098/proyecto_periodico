<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_admin extends CI_Controller {

	function __construct(){
        parent ::__construct();
		#$this->load->model('Mdl_not_user');
    }   	


	public function index(){
		if(isset($_POST['password'])){
			$this->load->model('usuario_model_admin');
			if($this->usuario_model_admin->login($_POST['username'],$_POST['password'])){
				redirect('Ctrl_admin');
			}else{
				echo "<script>
                alert('Credenciales equivocadas');
    			</script>";
			}
		}

		$this->load->view('login_admin');
		
				
	}

	public function funcionAlerta(){
		
		/*alert("Los datos estan mal");*/
		
		
	}

	
}
