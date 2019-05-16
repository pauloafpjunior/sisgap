<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Implementado separado devido ao fato de uma manutenção expecífica e de fácil alteração.
//Lembrando que esse controlador usa o model Cursos, o resto das implementações está em Adm_subject

class Adm_course extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
    }
	//Abaixo estão funções para chamar as views Adm
  public function AdmBegin(){
    $this->load->view('AdminAcess/sisgapAdmBegin.php');
	}

	
	public function CadCursos(){
		$this->load->view('AdminAcess/sisgapAdmCadCursos.php');
	}

	//Funcao para listar os cursos já cadastrados no banco ----------- Funcionando
	public function ListCursos(){
		$this->load->model('cursos_model');
		$dados['Cursos'] = $this->cursos_model->listarSalvos();
		$this->load->view('AdminAcess/sisgapAdmListCursos.php', $dados);
	}

	//Função para fazer a validação do curso cadastrado ------------//funcionando
	public function validCurso(){
		$this->form_validation->set_rules('Nome', 'Nome do Curso', 'trim|required|min_length[5]|max_length[50]', array(
			'required' => 'Você não forneceu o nome do Curso', 'min_lenght[5]' => 'Nome muito pequeno !', 'max_lenght[50]' =>
			'Nome muito grande'
		));
		//Setando o padrão de erro que aparecerá na view
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		//Verificando se passou das regras setadas acima
		if($this->form_validation->run() == FALSE) 
    {
			$erros = array('erro' => validation_errors()); 
			$this->load->view('AdminAcess/sisgapAdmCadCursos.php', $erros); 
    } else {
			//Dando Load no model dos cursos
			$this->load->model('cursos_model');

			//Chamada da função salvar do model e verificação se ocorreu como esperado
			$dados = ['Nome' => $this->input->post('Nome')];
			$Nome = $this->input->post('Nome');
			if(!$this->cursos_model->verificaRepeticao($Nome)){
				if($this->cursos_model->salvar($dados)){
					$this->session->set_flashdata('alterados', 'Curso cadastrado com sucesso!');
					$this->load->view('AdminAcess/sisgapAdmCadCursos.php'); 
				} else {
					$this->session->set_flashdata('naoalterados', 'O curso não foi cadastrado!');
					$this->load->view('AdminAcess/sisgapAdmCadCursos.php'); 
				}
			} else {
				$this->session->set_flashdata('naoalterados', 'O nome já possui cadastro !');
				$this->load->view('AdminAcess/sisgapAdmCadCursos.php'); 
			}
		} 
	}
}