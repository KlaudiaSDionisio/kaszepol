<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function get_produto($id)
    {
        return $this->db->get_where('produto', ['id' => $id])->result();
    }

    public function get_produto_by_tipo($id_tipo)
    {
        return $this->db->get_where('produto', ['id_tipo_cat' => $id_tipo])->result();
    }
}