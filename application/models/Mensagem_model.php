<?php
class Mensagem_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    //Salvar dados do formulario no banco de dados
    public function salvar($dados) {
    
        return $this->db->insert('mensagem', $dados);
    }

    //Função para evitar o cadastro de dados iguais ---- CPF, RG
    public function statusVerifica($CPF, $RG){
        $this->db->where('CPF', $CPF);
        $this->db->where('RG', $RG);
        $query = $this->db->get('mensagem');

        return ($query->num_rows() == 1) ? true : false;
    }

    //Função para checar se já existe o CPF no sistema
    public function verificaCPF($CPF){
        $this->db->where('CPF', $CPF);
        $query = $this->db->get('mensagem');
        return ($query->num_rows() == 1) ? true : false;
    }

    //Função para checar se já existe o RG no sistema
    public function verificaRG($RG){
        $this->db->where('RG', $RG);
        $query = $this->db->get('mensagem');
        return ($query->num_rows() == 1) ? true : false;
    }

    //Verificação do login
    public function loginVerifica($CPF, $Senha){

        $this->db->where('CPF', $CPF);
        $this->db->where('Senha', $Senha);
        $query = $this->db->get('mensagem');

        return ($query->num_rows() == 1) ? true : false;
    }

    //Atualização de informações
    public function update($CPF, $altera)
    {
        $this->db->where('CPF', $CPF);
        return($this->db->update('mensagem', $altera)) ? true : false;
    }

    // Consultar: https://codeigniter.com/user_guide/database/query_builder.html
    // Consultar: https://codeigniter.com/user_guide/tutorial/create_news_items.html
}