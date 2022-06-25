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

            if ($this->input->post('id') != NULL) {
                // Se foi passado ele vai fazer a atualizaçao no registro.
                $query = $this->editarProduto($dados, $this->input->post('id'));
            } else {
                // Executa a função do produtos_model adicionar
                $this->produtos->addProduto($dados);
            }

            //Fazemos um redicionamento para a página 		
            redirect("/");
        }
    }

    //Função salvar no DB
    public function editar($id = NULL)
    {
        // Verifica se foi passado um ID, se não vai para a página listar produtos
        if ($id == NULL) {
            redirect('/');
        }

        //Carrega o Model Produtos				
        $this->load->model('produtos_model', 'produtos');

        // Faz a consulta no banco de dados pra verificar se existe
        $query = $this->produtos->getProdutoById($id);

        // Verifica que a a consulta voltar um registro, se nao vai para a pagina listar produtos
        if ($query == NULL) {
            redirect('/');
        }

        // Criamos um array onde vai guardar os dados do produtos e passamos como parametro para view
        $dados['produto'] = $query;

        // Carrega a view
        $this->load->view('editarprodutos', $dados);
    }
}
