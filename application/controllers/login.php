<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
        parent ::__construct();
		#$this->load->model('Mdl_not_user');
    }   	


	public function index(){
		if(isset($_POST['password'])){
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['username'],$_POST['password'])){
				redirect('Ctrl_bienvenida');
			}else{
				echo "<script>
                alert('Credenciales equivocadas');
    			</script>";
			}
		}

		$this->load->view('login');
		
				
	}

	public function funcionAlerta(){
		
		/*alert("Los datos estan mal");*/
		
		
	}

	
}
