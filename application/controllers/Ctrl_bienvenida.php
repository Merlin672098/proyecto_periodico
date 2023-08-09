<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_bienvenida extends CI_Controller {

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
		$this->load->model('Mdl_bienvenida');
    } 
	
	public function index(){
		$this->load->view('View_head');
		$this->load->view('View_bienvenida');
		$this->load->view('View_footer');		
	}	
}
