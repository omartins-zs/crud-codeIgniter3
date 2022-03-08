<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos extends CI_Controller
{

    public function index()
    {
        // Carrega o Model
        $this->load->model('produtos_model', 'produtos');

        // Pega os dados do Model
        $data['produtos'] = $this->produtos->getProdutos();

        $this->load->view('listarprodutos');
    }
}