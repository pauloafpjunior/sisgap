<?php
class disciplinas_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    //Função para salvar dados no banco de dados Cursos
    public function salvar($dados) {
        if($this->db->insert('Disciplinas', $dados)){
            return true;
        } else {
            return false;
        }
    }

    //Função responsável por renderizar os cursos na view de cad de disciplinas
    public function listarSalvos(){
        return $query = $this->db->get( 'Cursos' );
    }

    //Funcao responsável por listar todas as disciplinas
    public function listarDisciplinas(){
        return $query = $this->db->get('Disciplinas');
    }
}