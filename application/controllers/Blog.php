<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->template('blog/blog');
    }

    public function post($id)
    {
        if ($id == 1 || $id == 2) {
            $this->load->template("blog/post$id");
        }else{
            $this->load->template("blog/post1");
        }
    }
}
