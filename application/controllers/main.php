<?php
defined('BASEPATH') or exit('No direct script access allowed');

class main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_data');
	}
	public function index(){
		$data['properti'] = $this->m_data->get_all_properti();
		$this->load->view('main', $data); 
	}

	public function about_us()
	{
		$this->load->view('about');
	}

	public function view_gallery()
	{
		$this->load->view('gallery');
	}

	public function detail_gallery()
	{
		$this->load->view('detailgallery');
	}
}
