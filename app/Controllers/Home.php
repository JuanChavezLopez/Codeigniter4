<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['titulo'] = 'Desde las vistas';
		$data['lista'] = array('negro', 'azul', 'blanco');
		echo view('tables', $data);
		// $this->load->view('footer'); version 3
		echo view('header');
		echo view('tables');
		echo view('footer');
	}

	public function test($id) {
		$data['titulo'] = 'Desde las vistas';
		$data['lista'] = array('negro', 'azul', 'blanco');
		$this->load->view('tables', $data);
		$this->load->view('footer');
	}
}
