<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_editor extends CI_Controller {

	function __construct(){
        parent ::__construct();
		$this->load->model('Mdl_editor');
    }   	


	public function index(){
		$this->load->view('View_editor');		
	}

	public function modificar(){
		$id_noticia=$this->input->post('vid_noticia');
		$estado=$this->input->post('vestado');

		$parametros['cnoticia']=$id_noticia; 
		$parametros['cestado']=$estado;
		$this->Mdl_editor->modificar_estado($parametros);
	}


	public function tabla_noticias(){
		echo json_encode($this->Mdl_editor->obtener_noticia());		
	}

	public function buscar(){
		$ntipo=$this->input->post('vtipo_tema');
		echo json_encode($this->Mdl_editor->buscar_id_tipo_tema($ntipo));	
	}

	public function buscar_2(){
		$name_colum=$this->input->post('vname_user');
		echo json_encode($this->Mdl_editor->buscar_por_nombre($name_colum));	
	}
	
}
