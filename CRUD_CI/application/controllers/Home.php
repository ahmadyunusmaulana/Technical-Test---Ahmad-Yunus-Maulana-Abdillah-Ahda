<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('show_data_doctor');
	}

	public function index()
	{
		$queryAllDoctor = $this->show_data_doctor->getDataDoctor();
		$DATA = array('queryAllDct' => $queryAllDoctor);
		// $this->load->view('home', $DATA);

		$queryAllPoli = $this->show_data_doctor->getDataPoli();
		$dataPoli = array('queryAllPol' => $queryAllPoli);
		$this->load->view('home', $dataPoli);
	}
}
