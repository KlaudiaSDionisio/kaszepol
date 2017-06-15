<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_cat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function get_tipo_cat($id)
    {
        return $this->db->get_where('tipo_cat', ['id' => $id])->result();
    }
}