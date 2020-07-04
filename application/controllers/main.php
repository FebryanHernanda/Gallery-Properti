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
	public function index()
	{
		$data['properti'] = $this->m_data->get_all_properti();
		$this->load->view('main', $data);
	}

	public function about_us()
	{
		$this->load->view('about');
	}

	public function view_gallery()
	{
		$data['properti'] = $this->m_data->get_all_properti();
		$this->load->view('gallery', $data);
	}

	public function detail_gallery($id)
	{
		// $data['properti'] = $this->m_data->get_all_properti();
		$data['properti'] = $this->m_data->detail($id);
		$this->load->view('detailgallery', $data);
		// print_r($data['properti']);
	}

}
