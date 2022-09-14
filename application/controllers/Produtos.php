<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Carrega o Model Produtos + Apelido				

        $this->load->model("Produtos_model", 'produtos');
    }

    public function index()
    {
        $dados["titulo"] = "Inicial";

        // Pega os dados do Model
        $dados['produtos'] = $this->Produtos_model->getProdutos();
        $dados['total'] = $this->Produtos_model->totalRegistros();

        // Passa o conjunto de Variaveis para as views
        $this->load->vars($dados);

        $this->load->view('templates/header');
        $this->load->view('pages/home');
    }

    //Página de adicionar produto
    public function add()
    {
        $dados["titulo"] = "Novo produto";

        // Passa o conjunto de Variaveis para as views
        $this->load->vars($dados);

        //Carrega a View
        $this->load->view('templates/header', $dados);

        $this->load->view('pages/addprodutos', $dados);
    }

    //Função salvar no DB
    public function editar($id = NULL)
    {
        // Verifica se foi passado um ID, se não vai para a página listar produtos
        if ($id == NULL) {
            redirect(base_url());
        }

        // Faz a consulta no banco de dados pra verificar se existe
        $query = $this->produtos->getProdutoById($id);

        // Verifica que a a consulta voltar um registro, se nao vai para a pagina listar produtos
        if ($query == NULL) {
            redirect('/');
        }

        // Criamos um array onde vai guardar os dados do produtos e passamos como parametro para view
        $dados['produto'] = $query;

        // Titulo da Guia no navegador
        $dados["titulo"] = "Editar Produto";

        // Carrega a view
        $this->load->view('templates/header', $dados);
        $this->load->view('pages/editarprodutos', $dados);
    }

    //Função salvar no DB
    public function salvar()
    {
        //Verifica se foi passado o campo nome vazio.
        if ($this->input->post('nome') == NULL) {
            echo 'O compo nome do produto é obrigatório.';
            echo '<a href="/produtos/add" title="voltar">Voltar</a>';
        } else {

            //Pega dados do post e guarda na array $dados
            $dados['nome'] = $this->input->post('nome');
            $dados['preco'] = $this->input->post('preco');
            $dados['ativo'] = $this->input->post('ativo');

            // Verifica se foi passado via post a id do produtos
            if ($this->input->post('id') != NULL) {
                // Se foi passado ele vai fazer a atualizaçao no registro.
                $this->produtos->editarProduto($dados, $this->input->post('id'));
            } else {
                // Executa a função do produtos_model adicionar
                $this->produtos->addProduto($dados);
            }

            //Fazemos um redicionamento para a página 		
            redirect("/");
        }
    }

    // Função apagar registro
    public function apagar($id = NULL)
    {
        // Verifica se foi passado um ID, se nao vai para a pagina Listar Produtos(Home)
        if ($id == null) {
            redirect(base_url());
        }

        // Faz a consulta no banco de dados pra verificar se existe
        $query = $this->produtos->getProdutoByID($id);

        // Verifica se foi encontrado um registro com a ID passada
        if ($query != null) {
            // Executa a função apagarProdutos no Model
            $this->produtos->apagarProdutos($query->id);
            redirect(base_url());
        } else {
            // Se não encontrou nenhum resgistro no BD com a ID passada ele volta para a Pagina Home
            redirect(base_url());
        }
    }

    // Function mudar status do Produto
    public function status($id = NULL)
    {
        // Verifica se foi passado um ID, se nao vai para a pagina Home
        if ($id == null) {
            redirect(base_url());
        }

        // Faz a consulta no banco de dados pra verificar se existe
        $query = $this->produtos->getProdutoByID($id);

        // Verifica se foi encontrado um registro com a ID passada
        if ($query != null) {

            // Verifica se o produto esta ativo ou inativo para poder mudar o status do mesmo
            if ($query->ativo == 1) {
                $dados['ativo'] = 0;
            } else {
                $dados['ativo'] = 1;
            }

            // Executa a function statusProduto no Model
            $this->produtos->statusProduto($dados, $query->id);
            redirect(base_url());
        } else {
            // Se não encontrou nenhum resgistro no BD com a ID passada ele volta para a Pagina Home
            redirect(base_url());
        }
    }
}
