<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//ESTE CONTROLADOR É RESPONSÁVEL POR EXECUTAR A FUNCAO DE ALTERAÇÃO DE DADOS NO BANCO
//Implementado separado devido ao fato de uma manutenção expecífica e de fácil alteração.

class Controllerupdate extends CI_Controller {
    public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
    }
    
    //Atualiza os dados no Banco pós login
	public function update()
	{
		checkLogin(); //Checagem de Autenticação no sistema
		$CPFtemp = $_SESSION['cpf-acesso'];
		$this->form_validation->set_rules ('Nome', 'Nome Completo','trim|required|min_length[10]|max_length[40]','valid_username'
		, array('required' => 'Você não forneceu um Nome!'));
		$this->form_validation->set_rules ('Nascimento', 'Data de Nascimento', 'required|trim', array('required' => 'Data não atribuída!'));
		$this->form_validation->set_rules ('RG', 'RG', 'required','min_length[10]','max_length[11]|trim|xss_clean',array('required' => 'RG não atribuído!'));
		$this->form_validation->set_rules ('CPF', 'CPF', 'required','min_lenght[11]','max_length[11]|trim|xss_clean', array('required' => 'CPF não atribuído ou inválido!'));
		$this->form_validation->set_rules ('Endereco', 'Endereço', 'required', array('required' => 'Endereço não atribuída!'));
		$this->form_validation->set_rules ('Bairro', 'Bairro', 'required', array('required' => 'Bairro não atribuído!'));
		$this->form_validation->set_rules ('Cidade', 'Cidade', 'required', array('required' => 'Cidade não atribuída!'));
		$this->form_validation->set_rules ('CEP', 'CEP', 'required', array('required' => 'CEP não atribuído!'));
		$this->form_validation->set_rules ('Estado', 'Estado', 'required', array('required' => 'O campo estado é obrigatório!'));
		$this->form_validation->set_rules ('Pais', 'País', 'required', array('required' => 'País não atribuído!'));
		$this->form_validation->set_rules ('Telefone', 'Telefone', 'required|min_length[10]|max_length[17]', array('required' => 'O campo Telefone é obrigatório!'));
		$this->form_validation->set_rules ('Celular', 'Celular', 'required|required|min_length[10]|max_length[17]', array('required' => 'O campo Celular é obrigatório!'));
		$this->form_validation->set_rules ('Email', 'E-mail','trim|required|valid_email', array('valid_email' => 'Email inválido!'));
		$this->form_validation->set_rules ('Graduacao', 'Graduação', 'required', array('required' => 'O campo Graduação é obrigatório!'));
		$this->form_validation->set_rules ('PosGraduacao', 'Pós-Graduação', 'required', array('required' => 'Preencha este campo!'));
		$this->form_validation->set_rules ('AreaposGrad', 'Área Pós-Graduação', 'required');
	    $this->form_validation->set_rules ('PExpDoc', 'Possui experiência em docência?', 'required');
		$this->form_validation->set_rules ('ExpProf', 'Experiência(s) Profissional', 'required');
		$this->form_validation->set_rules ('ExpEAD', 'Experiência(s) Profissional na área de EAD', 'required');
		$this->form_validation->set_rules ('ConhecInfo', 'Nível de Conhecimento em informática', 'required');
		$this->form_validation->set_rules ('Curriculo', 'Currículo Lattes', 'required', array('required' => 'Preencha este campo!'));
		$this->form_validation->set_rules ('OutrasInfo', 'Outras informações adicionais');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run() == FALSE)
		{
			//$this->session->set_flashdata('error', 'Dados inválidos !');
			//$this->load->view('Front-end/sisgapSuccessLogin.php');
			$erros = array('erro' => validation_errors()); 
			$this->load->view('Front-end/Configs/DarkLightColors/sisgapEditProfile.php', $erros);

		} else {
			$altera = [
				'Nome' => $this->input->post('Nome'),
				'Nascimento' => $this->input->post('Nascimento'),
				'RG' => $this->input->post('RG'),
				'Endereco' => $this->input->post('Endereco'),
				'Telefone' => $this->input->post('Telefone'),
				'Bairro' => $this->input->post('Bairro'),
				'Cidade' => $this->input->post('Cidade'),
				'CEP' => $this->input->post('CEP'),
				'Estado' => $this->input->post('Estado'),
				'Pais' => $this->input->post('Pais'),
				'Celular' => $this->input->post('Celular'),
				'Telefone' => $this->input->post('Telefone'),
				'Celular' => $this->input->post('Celular'),
				'Email' => $this->input->post('Email'),
				'ConfEmail' => $this->input->post('Email'),
				'Graduacao' => $this->input->post('Graduacao'),
				'PosGraduacao' => $this->input->post('PosGraduacao'),
				'AreaposGrad' => $this->input->post('AreaposGrad'),
				'PExpDoc' => $this->input->post('PExpDoc'),
				'ExpProf' => $this->input->post('ExpProf'),
				'ExpEAD' => $this->input->post('ExpEAD'),
				'ConhecInfo' => $this->input->post('ConhecInfo'),
				'Curriculo' => $this->input->post('Curriculo'),
				'AtuaTutor' => $this->input->post('AtuaTutor'),
				'OutrasInfo' => $this->input->post('OutrasInfo'),
			];

            //Armazenando os dados alterados no sistema
			$this->load->model('usuarios_model');
			if($this->usuarios_model->update($CPFtemp, $altera))
			{
				$this->session->set_flashdata('alterados', 'Dados alterados com sucesso!');
				$this->load->view('Front-end/Configs/DarkLightColors/sisgapLoggedView.php');
			} 
			else 
			{
				$this->session->set_flashdata('alterados', 'Erro ao alterar os dados!');
				$this->load->view('Front-end/Configs/DarkLightColors/sisgapEditProfile.php');
			}
		}
	}
}