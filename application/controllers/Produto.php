<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Produto_model');

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function detalhe($id)
	{

		$this->load->model('Tipo_cat_model');
		$this->load->model('Categoria_model');

		$data['produto'] = $this->Produto_model->get_produto($id);
		if(count($data['produto'])){
			$data['produto'] = $data['produto'][0];
			$data['produtos'] = $this->Produto_model->get_produtos_aleatorios();
			$data['tipo_cat'] = $this->Tipo_cat_model->get_tipo_cat($data['produto']->id_tipo_cat)[0];
			$data['categoria'] = $this->Categoria_model->get_categoria($data['tipo_cat']->id_categoria)[0];

			$this->load->template('produto/detalhe', $data);
		}else{
			redirect(site_url());
		}
	}

	public function carrinho()
	{
		if(isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho']) && count($_SESSION['carrinho'])){
			$produtos_id = array_keys($_SESSION['carrinho']);
			$data['produtos'] = $this->Produto_model->get_produtos(['id' => $produtos_id]);
		}else{
			$data['produtos'] = [];
		}

        $data['produtos_aleatorios'] = $this->Produto_model->get_produtos_aleatorios();


		$this->load->template('produto/carrinho', $data);
	}

	public function carrinho_adicionar($id)
	{
		if(is_numeric($id)){
			if(isset($_SESSION['carrinho'])){
				if(isset($_SESSION['carrinho'][$id])){
					$_SESSION['carrinho'][$id]++;
				}else{
					$_SESSION['carrinho'][$id] = 1;
				}
			}else{
				$_SESSION['carrinho'] = [];
				$_SESSION['carrinho'][$id] = 1;
			}
		}else{
			redirect(site_url());
		}

		redirect(site_url('produto/carrinho'));
	}

	public function carrinho_decrementar($id)
	{
		if(is_numeric($id)){
			if(isset($_SESSION['carrinho'])) {
                if (isset($_SESSION['carrinho'][$id])) {
                    if($_SESSION['carrinho'][$id] == 1){
                        unset($_SESSION['carrinho'][$id]);
                    }else{
                        $_SESSION['carrinho'][$id]--;
                    }
                }
            }
		}else{
			redirect(site_url());
		}

		redirect(site_url('produto/carrinho'));
	}

	public function carrinho_remover($id)
	{
		if(is_numeric($id)){
			if(isset($_SESSION['carrinho'])){
				if(isset($_SESSION['carrinho'][$id])){
					unset($_SESSION['carrinho'][$id]);
				}
			}
		}else{
			redirect(site_url());
		}

		redirect(site_url('produto/carrinho'));
	}

    public function pesquisa()
    {
        $str = $this->input->get('q');
        $data['palavra'] = $str;
        if($str){
            $data['produtos'] = $this->Produto_model->pesquisa($str);
        }else{
            $data['produtos'] = [];
        }
        $this->load->template('produto/lista_produto', $data);
    }

    public function limpa_carrinho()
    {
        $_SESSION['carrinho'] = null;

        redirect(site_url());
    }
}
