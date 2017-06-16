<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function get_produto($info)
    {
        if(is_array($info)){
            $result = $this->db->get_where('produto', $info)->result();
        }else{
            $result = $this->db->get_where('produto', ['id' => $info])->result();
        }

        return $result;
    }

    public function get_produtos(array $info)
    {
        foreach($info as $key => $value){
            if(is_array($value)){
                $this->db->where_in($key, $value);
            }else{
                $this->db->where($key, $value);
            }
        }

        $result = $this->db->get('produto')->result();

        return $result;
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