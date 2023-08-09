<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nose extends CI_Controller {

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
		$this->load->model('Mdl_lawea');
    } 
	
	public function index(){
		$this->load->view('formulario');
		$this->guardar_archivo();
	}

	private function guardar_archivo(){
        $mi_archivo = 'upload';
        $config['upload_path'] = "uploads/";
        //$config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            //$data['uploadError'] = $this->upload->display_errors();
            //echo $this->upload->display_errors();
            return;
        }


        //var_dump($this->upload->data());

    }
	
	public function subirArchivo(){
		$config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'pdf|xlsx|docx';
        $config['max_size'] = '20048';

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload("fileImagen")) {
            $data['errorArch'] = $this->upload->display_errors();
			//$this->load->view('layout/header');
			//$this->load->view('layout/menu');
			$this->load->view('formulario',$data);
			//$this->load->view('layout/footer');
        } else {

            $file_info = $this->upload->data();
           
            $titulo = $this->input->post('titImagen');
            $archivo = $file_info['file_name'];
            $subir = $this->Mdl_lawea->subir($titulo,$archivo);      
            $data['estado'] = "Archivo subido.";
            $data['archivo'] = $archivo;
			$data['error'] = "";
			$data['errorArch'] = "";

            //$this->load->view('layout/header');
			//$this->load->view('layout/menu');
			$this->load->view('formulario', $data);
			//$this->load->view('layout/footer');
            
        }
    }

    public function downloads($name){
         
       $data = file_get_contents('uploads/'.$name); 
       force_download($name,$data); 
     
	}
}

