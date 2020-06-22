<?php
defined('BASEPATH') or exit('No direct script access allowed');

class main extends CI_Controller
{

	public function index()
	{
		$this->load->view('main');
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
