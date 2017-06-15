<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function detalhe($id)
	{
		$this->load->model('Produto_model');
		$this->load->model('Tipo_cat_model');
		$this->load->model('Categoria_model');

		$data['produto'] = $this->Produto_model->get_produto($id);
		if(count($data['produto'])){
			$data['produto'] = $data['produto'][0];
			$data['tipo_cat'] = $this->Tipo_cat_model->get_tipo_cat($data['produto']->id_tipo_cat)[0];
			$data['categoria'] = $this->Categoria_model->get_categoria($data['tipo_cat']->id_categoria)[0];

			$this->load->view('produto/detalhe', $data);
		}else{
			redirect('/kaszepol');
		}
//		$data['tipo_cat'] = $this->Tipo_cat_model->get_tipo_cat($id);


	}
}
