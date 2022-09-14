<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produtos_model');
        $this->load->library('session');
        // $this->load->helper('auth');
        // $this->load->helper('json');
        // $this->load->library('curl');
        // $this->firebird = $this->load->database('firebird', true);
    }
}
