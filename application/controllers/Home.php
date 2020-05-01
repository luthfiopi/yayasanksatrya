<?php
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//	error_reporting(0);
		//	$this->load->model('Peraturan_model');
		
	}

	public function index()
	{
	//	$data['undangundang'] = $this->Peraturan_model->Undangundangterbaru();
	
	//	$this->load->view('templates/header');
	$this->load->view('index');
	//	$this->load->view('index', $data);
	//	$this->load->view('cariperaturan');
	//	$this->load->view('templates/footer');
	}
	
}
