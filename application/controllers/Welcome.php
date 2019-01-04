<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		/*$this->load->model('Mensagem_model');
		$this->load->view('welcome_message.php');
		$this->load->helper('url');
		$this->load->helper('form');*/

		//Aqui estão as inicializações dos metodos iniciais
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');

		//Aqui estão as validações dos formularios
		$this->form_validation->set_rules ('Nome', 'Nome Completo','trim|required|min_length[10]|max_length[40]','valid_username'
		, array('required' => 'Você não forneceu um Nome!'));
		$this->form_validation->set_rules ('Nascimento', 'Data de Nascimento', 'required|trim', array('required' => 'Data não atribuída!'));
		$this->form_validation->set_rules ('RG', 'RG', 'required','min_length[10]','max_length[11]|trim|xss_clean',array('required' => 'RG não atribuído!'));
		$this->form_validation->set_rules ('CPF', 'CPF', 'required','max_length[9]|trim|xss_clean', array('required' => 'RG não atribuído!'));
		$this->form_validation->set_rules ('Senha', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_rules ('ConfSenha', 'Confirmar senha','trim|required|matches[Senha]', array('matches' => 'Senhas diferentes!'));
		$this->form_validation->set_rules ('Endereco', 'Endereço', 'required', array('required' => 'Endereço não atribuída!'));
		$this->form_validation->set_rules ('Bairro', 'Bairro', 'required', array('required' => 'Bairro não atribuído!'));
		$this->form_validation->set_rules ('Cidade', 'Cidade', 'required', array('required' => 'Cidade não atribuída!'));
		$this->form_validation->set_rules ('CEP', 'CEP', 'required', array('required' => 'CEP não atribuído!'));
		$this->form_validation->set_rules ('Estado', 'Estado', 'required', array('required' => 'Estado não atribuído!'));
		$this->form_validation->set_rules ('Pais', 'País', 'required', array('required' => 'País não atribuído!'));
		$this->form_validation->set_rules ('Telefone', 'Telefone', 'required|min_length[10]|max_length[14]', array('required' => 'Data não atribuída!'));
		$this->form_validation->set_rules ('Celular', 'Celular', 'required|required|min_length[10]|max_length[14]', array('required' => 'Celular não atribuído!'));
		$this->form_validation->set_rules ('Email', 'E-mail','trim|required|valid_email', array('valid_email' => 'Email inválido!'));
		$this->form_validation->set_rules ('ConfEmail', 'Confirme seu E-mail', 'trim|required|matches[Email]');
		$this->form_validation->set_rules ('Graduacao', 'Graduação', 'required', array('required' => 'Graduação não atribuída!'));
		$this->form_validation->set_rules ('PosGraduacao', 'Pós-Graduação', 'required');
		$this->form_validation->set_rules ('AreaposGrad', 'Área Pós-Graduação', 'required');
	    $this->form_validation->set_rules ('PExDoc', 'Possui experiência em docência?', 'required');
		$this->form_validation->set_rules ('ExpProf', 'Experiência(s) Profissional', 'required');
		$this->form_validation->set_rules ('ExpEAD', 'Experiência(s) Profissional na área de EAD', 'required');
		$this->form_validation->set_rules ('ConhecInfo', 'Nível de Conhecimento em informática', 'required');
		$this->form_validation->set_rules ('Curriculo', 'Currículo Lattes', 'required', 'valid_link');
		$this->form_validation->set_rules ('AtuaTutor', 'Já atuou ou atua como tutor na UFLA?', 'required');

		//Aqui estao codições atentendendo as validações
		if($this->form_validation->run() == FALSE) 
        {
			//Se o formulario nao for preenchido ele da um erro
			$erros = array('erro' => validation_errors()); 
			//Aqui eu nao sei como faz para a mensagem de erro aparecer na mesma tela sem que
			//os dados somem da tela
			//Mais estou procurando, quando eu achar eu vou concertar
			$this->load->view('welcome_message', $erros); 
        } 
        else 
        {
			//Caso contrario ele salva no banco e mostra uma view de sucesso
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
			//Chamada do metodo salvar passando o dados por parametro
			$this->cadastrar($dados);
			//Tela de sucesso exibida apos o salvamento dos dados
            $this->load->view('successful'); 
        } 
	}

	public function cadastrar($dados)
	{
		//Chamada do banco e salvação dos dados no Banco
		$this->load->model('mensagem_model');
		$this->mensagem_model->salvar($dados);
		//$this->index();	
	}
}

//Futuros updates:
//Validação Área de Login:
/*'login/send' => array(
      array('field'=>'login',
            'label'=>'Login/E-mail',
            'rules'=>'required|min_length[3]|max_length[100]|trim|addslashes|xss_clean'),
      array('field'=>'Senha',
            'label'=>'Senha',
            'rules'=>'required|min_length[3]|max_length[255]|trim')
  )
*/
//https://github.com/marcelod/codeistrap/blob/master/application/config/form_validation.php
