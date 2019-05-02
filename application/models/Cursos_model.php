<?php
class cursos_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    //Função para salvar dados no banco de dados Cursos
    public function salvar($dados) {
        if($this->db->insert('Cursos', $dados)){
            return true;
        } else {
            return false;
        }
    }

    //Função para verificar se o possivel cadastro já está no sistema(Evita repetição)
    public function verificaRepeticao($Nome){
        $this->db->where('Nome', $Nome);
        $query = $this->db->get('Cursos');
        return ($query->num_rows() == 1) ? true : false;
    }
}