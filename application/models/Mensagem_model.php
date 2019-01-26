<?php
class Mensagem_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    
    /*public function inserir($dados){
        $this->db->insert();
    }*/
    public function salvar($dados) {
    
        return $this->db->insert('mensagem', $dados);
    }

    public function loginVerifica($CPF, $Senha){

        $this->db->where('CPF', $CPF);
        $this->db->where('Senha', $Senha);
        $query = $this->db->get('mensagem');

        return ($query->num_rows() == 1) ? true : false;
    }

    // Consultar: https://codeigniter.com/user_guide/database/query_builder.html
    // Consultar: https://codeigniter.com/user_guide/tutorial/create_news_items.html
}