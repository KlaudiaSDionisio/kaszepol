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

    public function get_produtos_aleatorios($qtd = 3)
    {
        $sql = "SELECT * FROM produto WHERE id IN (
                   SELECT id FROM (
                      SELECT id FROM produto ORDER BY RAND() LIMIT $qtd
                    )
                t)";

        $result = $this->db->query($sql)->result();

        return $result;
    }
}