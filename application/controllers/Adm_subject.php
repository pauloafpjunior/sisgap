<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Implementado separado devido ao fato de uma manutenção expecífica e de fácil alteração.
//Lembrando que esse controlador usa o model Disciplinas, complemento do controlador Adm_course

class Adm_subject extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
    }

    //Esta função carrega a tela de cadastros de disciplinas renderizando-a conforme o BD
	public function CadDisciplina(){

		$this->load->model('disciplinas_model');
		$dados['Cursos'] = $this->disciplinas_model->listarSalvos();
		$this->load->view('AdminAcess/sisgapAdmCadDisciplinas.php', $dados);
    }
    
    //Função para renderizar e carregar as Disciplinas cadastradas ---------- //Deixei como comentario porem ja implementada
	//Falta passar dados por parametro para a view
	public function ListDisciplina(){
		//$this->load->model('disciplinas_model');
		//$dados['Disciplinas'] = $this->disciplinas_model->listarDisciplinas();
		$this->load->view('AdminAcess/sisgapAdmListDisciplinas.php');
    }
    
    //Função responsável por validar a disciplina cadastrada ------------//NAO FUNCIONA AINDA !
	public function validDisciplina(){
		$this->form_validation->set_rules ('Curso', 'Curso', 'required', array('required' => 'Selecione um Curso!'));
		$this->form_validation->set_rules ('Nome', 'Nome', 'required|min_length[4]|max_length[40]', array('required' => 'Nome não especificado!',
		'min_length[4]' => 'Nome muito pequeno !', 'max_length[40]' => 'Nome muito grande !'));
		$this->form_validation->set_rules ('Codigo', 'Codigo', 'required', array('required' => 'Codigo não atribuído !'));
		$this->form_validation->set_rules ('Modulo', 'Modulo', 'required', array('required' => 'Módulo não atribuído !'));
		$this->form_validation->set_rules ('CargaHoraria', 'CargaHoraria', 'required', array('required' => 'Carga Horaria não atribuída!'));
		$this->form_validation->set_rules ('QtdCredtito', 'QtdCredito', 'required', array('required' => 'Quantidade de Créditos não atribuído !'));

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run() == FALSE) {
			$erros = array('erro' => validation_errors());
			$this->load->view('AdminAcess/sisgapAdmCadDisciplinas.php', $erros); 
        } else {
			$dados = [
				'Nome' => $this->input->post('Nome'),
				'Codigo' => $this->input->post('Codigo'),
				'Modulo' => $this->input->post('Modulo'),
				'CargaHoraria' => $this->input->post('CargaHoraria'),
				'QtdCredito' => $this->input->post('QtdCredito'),
				'IdCurso' => $this->input->post('Curso')
			];

			$this->load->model('disciplinas_model');
			if($this->disciplinas_model->salvar($dados)){
				$this->session->set_flashdata('alterados', 'Disciplina cadastrada com sucesso!');
				$this->load->view('AdminAcess/sisgapAdmBegin.php');
			} else {
				$this->session->set_flashdata('naoalterados', 'Disciplina não foi cadastrada!');
				$this->load->view('AdminAcess/sisgapAdmBegin.php');
			}
		}
	}
}