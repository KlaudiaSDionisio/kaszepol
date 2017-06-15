<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function get_categoria($id)
    {
        return $this->db->get_where('categoria', ['id' => $id])->result();
    }
}