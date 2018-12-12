<?php
class Mensagem_model extends CI_Model {
    public $id;
    public $email;
    public $mensagem;

    // Consultar: https://codeigniter.com/user_guide/database/query_builder.html
    public function obter_todas() {
        $query = $this->db->get('mensagem');
        return $query->result();
    }

    // Consultar: https://codeigniter.com/user_guide/tutorial/create_news_items.html
    public function salvar() {
        $dados = array(
            'email' => $this->input->post('email'),
            'mensagem' => $this->input->post('mensagem')
        );
    
        return $this->db->insert('mensagem', $dados);
    }

}