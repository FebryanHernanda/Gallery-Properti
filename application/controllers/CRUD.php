<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CRUD extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('tambah-data', (array) $output);
	}


	public function index()
	{
		$this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
	}

	public function Properti()
	{
		try {
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');

			$crud->set_table('Properti');

			$crud->set_subject('Property');

			$crud->required_fields('Nama');
			$crud->columns('Nama', 'Deskripsi', 'Alamat', 'Harga', 'Gambar');

			$crud->set_field_upload('Gambar', 'assets/uploads/files/');

			$output = $crud->render();

			$this->_example_output($output);
		} catch (Exception $e) {
			show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
		}
	}
}
