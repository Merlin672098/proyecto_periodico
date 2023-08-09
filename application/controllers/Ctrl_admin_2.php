<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_admin_2 extends CI_Controller {

	/** 
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct(){
        parent ::__construct();
		$this->load->model('Mdl_admin_2');
    } 
	
	public function index(){
		$this->load->view('View_admin_2');
	}

	public function registrar(){
		$usuario=$this->input->post('vusuario');
		$password=$this->input->post('vpassword');
		$not_publicadas=$this->input->post('vnot_pu');		
		$fecha_c=$this->input->post('vfecha_c');
		$columnista=$this->input->post('vcolumnista');
		$admin=$this->input->post('vadmin');

		$parametros['cusuario']=$usuario;
		$parametros['cpassword']=$password;
		$parametros['cnot_publi']=$not_publicadas;		
		$parametros['cfecha_c']=$fecha_c;
		$parametros['ccolumnista']=$columnista;
		$parametros['cadmin']=$admin;

		$this->Mdl_admin_2->registro_columnistas($parametros);
	}

	public function modificar(){
		$id_usuario=$this->input->post('vid_column');
		$usuario=$this->input->post('vusuario');
		$password=$this->input->post('vpassword');
		$not_publicadas=$this->input->post('vnot_pu');		
		$fecha_c=$this->input->post('vfecha_c');
		$columnista=$this->input->post('vcolumnista');
		$admin=$this->input->post('vadmin');

		$parametros['cid_usuario']=$id_usuario;
		$parametros['cusuario']=$usuario;
		$parametros['cpassword']=$password;
		$parametros['cnot_publi']=$not_publicadas;		
		$parametros['cfecha_c']=$fecha_c;
		$parametros['ccolumnista']=$columnista;
		$parametros['cadmin']=$admin;

		$this->Mdl_admin_2->modificar_registro($parametros);
	}

	public function eliminar_registro(){
		$cid_usuario=$this->input->post('vid_usuario');
		$this->Mdl_admin_2->eliminar($cid_usuario);
	}

	public function tabla_columinstas(){
		echo json_encode($this->Mdl_admin_2->obtener_registros());		
	}
	public function buscar(){
		$name_colum=$this->input->post('vname_user');
		echo json_encode($this->Mdl_admin_2->buscar_registro($name_colum));	
	}
}

