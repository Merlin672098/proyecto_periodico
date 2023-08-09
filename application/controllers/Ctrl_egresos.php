<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_egresos extends CI_Controller {

	function __construct()
    {
        parent ::__construct();
		$this->load->model('Mdl_egresos');
    }   	


	public function index()
	{
		$this->load->view('View_Egre_head');
		$this->load->view('View_Egre');
		$this->load->view('View_Egre_footer');
		
	}

	public function guardar()
	{
		$id_tipo_egreso=$this->input->post('id_tipo_egreso');
		$fecha_eg=$this->input->post('fecha_eg');
		$monto_eg=$this->input->post('monto_eg');		
		$expli_eg=$this->input->post('expli_eg');
		$id_ureg=$this->input->post('id_ureg');
		$fecha_reg=$this->input->post('fecha_reg');
		$borrado=$this->input->post('borrado');
		$id_usuario=$this->input->post('id_usuario');
		$id_evento=$this->input->post('id_evento');

		$parametros['cid_tipo_egreso']=$id_tipo_egreso;
		$parametros['cfecha_eg']=$fecha_eg;
		$parametros['cmonto_eg']=$monto_eg;		
		$parametros['cexpli_eg']=$expli_eg;
		$parametros['cid_ureg']=$id_ureg;
		$parametros['cfecha_reg']=$fecha_reg;
		$parametros['cborrado']=$borrado;
		$parametros['cid_usuario']=$id_usuario;
		$parametros['cid_evento']=$id_evento;

		$this->Mdl_egresos->insertar_egreso($parametros);
	}

	public function modificar(){
		$id_egreso=$this->input->post('id_egreso');
		$id_tipo_egreso=$this->input->post('id_tipo_egreso');
		$fecha_eg=$this->input->post('fecha_eg');
		$monto_eg=$this->input->post('monto_eg');		
		$expli_eg=$this->input->post('expli_eg');
		$id_ureg=$this->input->post('id_ureg');
		$fecha_reg=$this->input->post('fecha_reg');
		$borrado=$this->input->post('borrado');
		$id_usuario=$this->input->post('id_usuario');
		$id_evento=$this->input->post('id_evento');

		$parametros['cid_egreso']=$id_egreso;
		$parametros['cid_tipo_egreso']=$id_tipo_egreso;
		$parametros['cfecha_eg']=$fecha_eg;
		$parametros['cmonto_eg']=$monto_eg;		
		$parametros['cexpli_eg']=$expli_eg;
		$parametros['cid_ureg']=$id_ureg;
		$parametros['cfecha_reg']=$fecha_reg;
		$parametros['cborrado']=$borrado;
		$parametros['cid_usuario']=$id_usuario;
		$parametros['cid_evento']=$id_evento;

		$this->Mdl_egresos->modificar_egreso($parametros);
	}

	public function eliminar_egresos(){
		$cid_egreso=$this->input->post('vid_egreso');
		$this->Mdl_egresos->eliminar_egreso($cid_egreso);
	}

	public function tabla_egresos(){
		echo json_encode($this->Mdl_egresos->obtener_egreso_all());		
	}

	public function buscar(){
		$ntipo=$this->input->post('vtipo_egreso');
		echo json_encode($this->Mdl_egresos->buscar_id_tipo_egreso($ntipo));	
	}
	///////SUBMONTO////////
		
	public function mostrar_suma()
	{
		echo json_encode($this->Mdl_egresos->obtener_suma());		
	}

	public function buscar_mes_suma(){
		$fecha_eg=$this->input->post('vmes');

		$parametros['fecha_eg']=$fecha_eg;
		
		$this->Mdl_egresos->obtener_suma_mes($parametros);
		echo json_encode($this->Mdl_egresos->obtener_suma_mes($parametros));
	} 
	public function obtener_mes()
	{
		$fecha_eg=$this->input->post('vmes');

		$parametros['fecha_eg']=$fecha_eg;
		
		$this->Mdl_egresos->buscar_mes_by($parametros);
		echo json_encode($this->Mdl_egresos->buscar_mes_by($parametros));
	}
}





