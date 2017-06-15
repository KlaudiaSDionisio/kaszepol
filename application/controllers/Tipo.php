<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index($id = 1)
	{
		if($id < 1 && $id > 8){
			$id = 1;
		}

		$this->load->model('Produto_model');
		$this->load->model('Tipo_cat_model');
		$this->load->model('Categoria_model');

		$data['produtos'] = $this->Produto_model->get_produto_by_tipo($id);
		$data['tipo_cat'] = $this->Tipo_cat_model->get_tipo_cat($id)[0];
		$data['categoria'] = $this->Categoria_model->get_categoria($data['tipo_cat']->id_categoria)[0];

		$this->load->template('tipo/lista_produto', $data);
	}

	public function detalhe($id)
	{
		$this->load->model('Produto_model');

		$this->Produto_model->get_produto($id);

		$this->load->view('welcome_message');
	}
}
