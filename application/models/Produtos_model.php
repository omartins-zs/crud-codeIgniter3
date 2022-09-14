<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_model extends CI_Model
{
    public function getProdutos()
    {
        $query = $this->db->get('produtos');

        return $this->db->get("produtos")->result_array();

        return $query->result_array();
    }

    //Adiciona um novo produtos na tabela produtos
    public function addProduto($dados = NULL)
    {
        if ($dados != NULL) :
            $this->db->insert('produtos', $dados);
        endif;
    }

    // Get produtos by id
    public function getProdutoById($id = NULL)
    {
        // Usando Operador Ternario | Padrão TRUE
        if ($id != NULL) :
            // Verifica se e o ID no banco de dados
            $this->db->where('id', $id);
            // Limita para apenas um registro
            $this->db->limit(1);
            // Pega o produto
            $query = $this->db->get("produtos");
            // Retorna o produto em Objeto
            return $query->row();
        endif;
    }

    // Atualiza um produto na tabela de produtos
    public function editarProduto($dados = NULL, $id = NULL)
    {
        // Verifica se foi passado $dados e $id
        if ($dados != NULL && $id != NULL) :
            // Se foi passado faz a atualizaçao
            $this->db->update('produtos', $dados, array('id' => $id));
        endif;
    }

    // Faz o count de todos os registro da Tabela
    public function totalRegistros()
    {
        $totalRegistros = $this->db->count_all('produtos');

        return $totalRegistros;
    }

    // Apaga um produto na tabela de Produtos no BD
    public function apagarProdutos($id = NULL)
    {
        // Verificaremos se foi passado o ID como parametro
        if ($id != NULL) {
            // Executa a funçao DB Delete para apagar o produto
            $this->db->delete('produtos', array('id' => $id));
        }
    }
}
