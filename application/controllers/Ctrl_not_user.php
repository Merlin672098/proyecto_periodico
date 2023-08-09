<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_not_user extends CI_Controller {

	function __construct(){
        parent ::__construct();
		$this->load->model('Mdl_not_user');
    }   	


	public function index(){
		$this->load->view('View_noticia_user');
		$this->subirArchivo();
		
	}
	

	public function subirArchivo(){
		$config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '20048';

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload("fileImagen")) {
            //$data['errorArch'] = $this->upload->display_errors();
			//$this->load->view('layout/header');
			//$this->load->view('layout/menu');
			//$this->load->view('formulario',$data);
			//$this->load->view('layout/footer');
        } else {

            $file_info = $this->upload->data();
           
            $titulo = $this->input->post('titImagen');
            $archivo = $file_info['file_name'];
            //$subir = $this->Mdl_not_user->subir($titulo,$archivo);      
            //$data['estado'] = "Archivo subido.";
            $data['archivo'] = $archivo;
			$data['error'] = "";
			$data['errorArch'] = "";

            //$this->load->view('layout/header');
			//$this->load->view('layout/menu');
			//$this->load->view('formulario', $data);
			//$this->load->view('layout/footer');
            
        }
    }

    public function downloads($name){
		
       $this -> cargar -> ayudante ( 'descargar' ); 
	   $data  =  '¡Aquí hay algo de texto!' ; 
	   $name  =  'mitexto.txt' ;
       $data = file_get_contents($this->folder.$name); 
       force_download($name,$data); 
	    
	}

	public function guardar(){
		
		$titular=$this->input->post('vtitular');
		$fecha_p=$this->input->post('vfecha_p');
		$columnista=$this->input->post('vcolumnista');
		$editor=$this->input->post('veditor');
		$tema=$this->input->post('vtema');
		$titulo=$this->input->post('vnombre_archiv');
		$estado=$this->input->post('vestado');


		$parametros['ctitular']=$titular;
		$parametros['cfecha_p']=$fecha_p;
		$parametros['ccolumnista']=$columnista;
		$parametros['ceditor']=$editor;
		$parametros['ctema']=$tema;
		$parametros['ctitulo']=$titulo;
		$parametros['cestado']=$estado;

	

		$this->Mdl_not_user->subir_noticia($parametros);
	}

	public function modificar(){
		$id_noticia=$this->input->post('vid_noticia');
		$titular=$this->input->post('vtitular');
		$fecha_p=$this->input->post('vfecha_p');
		$columnista=$this->input->post('vcolumnista');
		$editor=$this->input->post('veditor');
		$tema=$this->input->post('vtema');
		$titulo=$this->input->post('vnombre_archiv');
		$estado=$this->input->post('vestado');

		$parametros['cnoticia']=$id_noticia;
		$parametros['ctitular']=$titular;
		$parametros['cfecha_p']=$fecha_p;
		$parametros['ccolumnista']=$columnista;
		$parametros['ceditor']=$editor;
		$parametros['ctema']=$tema;
		$parametros['ctitulo']=$titulo;
		$parametros['cestado']=$estado;

		$this->Mdl_not_user->modificar_noticia($parametros);
	}

	public function eliminar_noticia(){
		$cid_noticia=$this->input->post('vid_noticia');
		$this->Mdl_not_user->eliminar_noticia($cid_noticia);
	}

	public function tabla_noticias(){
		echo json_encode($this->Mdl_not_user->obtener_noticia());		
	}
	public function buscar(){
		$ntipo=$this->input->post('vtipo_tema');
		echo json_encode($this->Mdl_not_user->buscar_id_tipo_tema($ntipo));	
	}

	


	
}
