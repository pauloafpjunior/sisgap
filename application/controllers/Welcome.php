<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{

		// Consultar: https://codeigniter.com/user_guide/general/models.html
		// Consultar: https://codeigniter.com/user_guide/general/views.html

		$this->load->model('Mensagem_model');
		$this->load->view('welcome_message.php');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function cadastrar(){

		$dados = [
			'Nome' => $this->input->post('Nome'),
		    'Nascimento' => $this->input->post('Nascimento'),
		    'RG' => $this->input->post('RG'),
		    'CPF' => $this->input->post('CPF'),
		    'Senha' => $this->input->post('Senha'),
		    'ConfSenha' => $this->input->post('ConfSenha'),
		    'Endereco' => $this->input->post('Endereco'),
		    'Bairro' => $this->input->post('Bairro'),
		    'Cidade' => $this->input->post('Cidade'),
		    'CEP' => $this->input->post('CEP'),
            'Estado' => $this->input->post('Estado'),
		    'Pais' => $this->input->post('Pais'),
		    'Telefone' => $this->input->post('Telefone'),
		    'Celular' => $this->input->post('Celular'),
		    'Email' => $this->input->post('Email'),
		    'ConfEmail' => $this->input->post('ConfEmail'),
		    'Graduacao' => $this->input->post('Graduacao'),
		    'PosGraduacao' => $this->input->post('PosGraduacao'),
		    'AreaposGrad' => $this->input->post('AreaposGrad'),
		    'PExpDoc' => $this->input->post('PExpDoc'),
		    'ExpProf' => $this->input->post('ExpProf'),
		    'ExpEAD' => $this->input->post('ExpEAD'),
		    'ConhecInfo' => $this->input->post('ConhecInfo'),
		    'Curriculo' => $this->input->post('Curriculo'),
		    'AtuaTutor' => $this->input->post('AtuaTutor'),
			'OutrasInfo' => $this->input->post('OutasInfo'),
		];

	
		// Gravar no banco
		$this->load->model('mensagem_model');
		$this->mensagem_model->salvar($dados);
		$this->index();	

		/*if($this->db->insert('mensagem', $dados)){
			echo 'Cadastro realizado com sucesso!';
		} else {
			echo 'ERRO';
		}
	    if($this->Mensagem_model->inserir($dados)){
			echo 'Cadastro realizado com sucesso';
		} else {
			echo 'Erro ao realizar o Cadastro';
		}*/
	}

}
