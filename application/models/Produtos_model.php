<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_model extends CI_Model
{
    public function getProdutos()
    {
        $query = $this->db->get('produtos');
        return $query->result();
    }

    //Adiciona um novo produtos na tabela produtos
    public function addProduto($dados = NULL)
    {
        if ($dados != NULL) :
            $this->db->insert('produtos', $dados);
        endif;
    }
}