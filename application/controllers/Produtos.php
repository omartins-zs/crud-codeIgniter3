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

        $this->load->view('listarprodutos', $data);
    }

    //Página de adicionar produto
    public function add()
    {
        //Carrega o Model Produtos				
        $this->load->model('produtos_model', 'produtos');
        
        //Carrega a View
        $this->load->view('addprodutos');
    }

    //Função salvar no DB
    public function salvar()
    {
        //Verifica se foi passado o campo nome vazio.
        if ($this->input->post('nome') == NULL) {
            echo 'O compo nome do produto é obrigatório.';
            echo '<a href="/produtos/add" title="voltar">Voltar</a>';
        } else {

            //Carrega o Model Produtos				
            $this->load->model('produtos_model', 'produtos');

            //Pega dados do post e guarda na array $dados
            $dados['nome'] = $this->input->post('nome');
            $dados['preco'] = $this->input->post('preco');
            $dados['ativo'] = $this->input->post('ativo');

            //Executa a função do produtos_model adicionar
            $this->produtos->addProduto($dados);

            //Fazemos um redicionamento para a página 		
            redirect("/");
        }
    }
}
