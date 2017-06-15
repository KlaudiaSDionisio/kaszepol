<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index($id)
	{
		$this->load->view('tipo/lista_produto');
	}

	public function detalhe($id)
	{
		$this->load->model('Produto_model');

		$this->Produto_model->get_produto($id);

		$this->load->view('welcome_message');
	}
}
