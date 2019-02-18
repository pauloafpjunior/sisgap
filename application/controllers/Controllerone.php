<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controllerone extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	
	public function index()
	{
		//$this->load->view('sisgapBeginDarkcolors.php');
		$this->load->view('Front-end/sisgapBeginBluecolors.php');
	}

	public function inicio()
	{
		//$this->load->view('sisgapBeginDarkcolors.php');
		$this->load->view('Front-end/sisgapBeginBluecolors.php');
	}
	//Função para login no sistema
	public function login()
	{
		//Aqui será implementada a função de login no sistema.
		$this->form_validation->set_rules ('CPF', 'CPF', 'required','max_length[9]|trim|xss_clean', array('required' => 'CPF não atribuído ou inválido!'));
		$this->form_validation->set_rules ('Senha', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_error_delimiters('<div class="p-3 mb-2 bg-danger text-white shadow-lg p-3 mb-5 bg-danger rounded">', '</div>');

		if($this->form_validation->run() == FALSE) 
        {
			$erros = array('erro' => validation_errors()); 
			$this->load->view('Front-end/sisgapBeginBluecolors', $erros); 
        } else {

			//$CPF = $this->input->post('CPF');
			//$Senha = md5($this->input->post('Senha'));
			$dados_form = $this->input->post();

			$this->load->model('usuarios_model');
			if($this->usuarios_model->loginVerifica($dados_form['CPF'], md5($dados_form['Senha']))){  //Aqui ainda vou adaptar a funcao get_info, para melhor segurança
				//Aqui irei carregar a tela de Sucesso
				//Essa funcao abaixo e para falar que o usuarios esta logado
				$this->session->set_userdata('Logado', TRUE);
				$this->session->set_userdata('cpf-acesso', $dados_form['CPF']);
				$this->session->set_userdata('senha-acesso', $dados_form['Senha']);
				redirect('logged');
			} else {
				//Aqui irei permanecer na pagina e emitir o erro
				//echo 'Deu Errado';
				//$this->load->view('sisgapbegin');
				$this->session->set_flashdata('error', '<div class="p-3 mb-2 bg-danger text-white shadow-lg p-3 mb-5 bg-danger rounded">Usuário não Cadastrado!</div>');
				redirect('inicio', 'refresh');
			}
		}
	}
	//Funções para validação do formulario
	public function formulario()
	{
		//$this->load->view('sisgapform.php');
		$this->load->view('sisgapFormBlue.php');
	}
	
	public function form_validate(){
		//Aqui estão as validações dos formularios
		$this->form_validation->set_rules ('Nome', 'Nome Completo','trim|required|min_length[10]|max_length[40]','valid_username'
		, array('required' => 'Você não forneceu um Nome!'));
		$this->form_validation->set_rules ('Nascimento', 'Data de Nascimento', 'required|trim', array('required' => 'Data não atribuída!'));
		$this->form_validation->set_rules ('RG', 'RG', 'required','min_length[10]','max_length[11]|trim|xss_clean',array('required' => 'RG não atribuído!'));
		$this->form_validation->set_rules ('CPF', 'CPF', 'required','min_lenght[11]','max_length[11]|trim|xss_clean', array('required' => 'CPF não atribuído ou inválido!'));
		$this->form_validation->set_rules ('Senha', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_rules ('ConfSenha', 'Confirmar senha','trim|required|matches[Senha]', array('matches' => 'Senhas diferentes!'));
		$this->form_validation->set_rules ('Endereco', 'Endereço', 'required', array('required' => 'Endereço não atribuída!'));
		$this->form_validation->set_rules ('Bairro', 'Bairro', 'required', array('required' => 'Bairro não atribuído!'));
		$this->form_validation->set_rules ('Cidade', 'Cidade', 'required', array('required' => 'Cidade não atribuída!'));
		$this->form_validation->set_rules ('CEP', 'CEP', 'required', array('required' => 'CEP não atribuído!'));
		$this->form_validation->set_rules ('Estado', 'Estado', 'required', array('required' => 'O campo estado é obrigatório!'));
		$this->form_validation->set_rules ('Pais', 'País', 'required', array('required' => 'País não atribuído!'));
		$this->form_validation->set_rules ('Telefone', 'Telefone', 'required|min_length[10]|max_length[14]', array('required' => 'O campo Telefone é obrigatório!'));
		$this->form_validation->set_rules ('Celular', 'Celular', 'required|required|min_length[10]|max_length[14]', array('required' => 'O campo Celular é obrigatório!'));
		$this->form_validation->set_rules ('Email', 'E-mail','trim|required|valid_email', array('valid_email' => 'Email inválido!'));
		$this->form_validation->set_rules ('ConfEmail', 'Confirme seu E-mail', 'trim|required|matches[Email]');
		$this->form_validation->set_rules ('Graduacao', 'Graduação', 'required', array('required' => 'O campo Graduação é obrigatório!'));
		$this->form_validation->set_rules ('PosGraduacao', 'Pós-Graduação', 'required');
		$this->form_validation->set_rules ('AreaposGrad', 'Área Pós-Graduação', 'required');
	    $this->form_validation->set_rules ('PExpDoc', 'Possui experiência em docência?', 'required');
		$this->form_validation->set_rules ('ExpProf', 'Experiência(s) Profissional', 'required');
		$this->form_validation->set_rules ('ExpEAD', 'Experiência(s) Profissional na área de EAD', 'required');
		$this->form_validation->set_rules ('ConhecInfo', 'Nível de Conhecimento em informática', 'required');
		$this->form_validation->set_rules ('Curriculo', 'Currículo Lattes', 'required', 'valid_link');
		$this->form_validation->set_rules ('OutrasInfo', 'Outras informações adicionais', 'required');

		$CPF = $this->input->post('CPF');
		$RG = $this->input->post('RG');
		$CPFverifica = $CPF;
		$RGverifica = $RG;

		//Delimitadores de Erros
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		if($this->form_validation->run() == FALSE) 
        {
			$erros = array('erro' => validation_errors()); 
			$this->load->view('sisgapFormBlue.php', $erros); 
        } 
        else 
        {
			$this->load->model('usuarios_model');

			if($this->usuarios_model->verificaCPF($CPF) && $this->usuarios_model->verificaRG($RG)){
				$erro1 = $this->session->set_flashdata('DadosIguais', 'CPF e RG já possui cadastro no sistema !');
				$this->load->view('sisgapFormBlue.php', $erro1);
			} else if(!$this->usuarios_model->verificaCPF($CPF) && $this->usuarios_model->verificaRG($RG)){
				$erro2 = $this->session->set_flashdata('RGIguais', 'O RG informado já possui cadastro no sistema!');
				$this->load->view('sisgapFormBlue.php', $erro2);
			} else if($this->usuarios_model->verificaCPF($CPF) && !$this->usuarios_model->verificaRG($RG)){
				$erro3 = $this->session->set_flashdata('CPFIguais', 'O CPF informado já possui cadastro no sistema!');
				$this->load->view('sisgapFormBlue.php', $erro3);
			} else {

				//Caso contrario ele salva no banco e mostra uma view de sucesso
				$dados = [
					'Nome' => $this->input->post('Nome'),
					'Nascimento' => $this->input->post('Nascimento'),
					'RG' => $RGverifica,
					'CPF' => $CPFverifica,
					'Senha' => md5($this->input->post('Senha')),
					'ConfSenha' => md5($this->input->post('ConfSenha')),
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
					'OutrasInfo' => $this->input->post('OutrasInfo'),
				];
				
				$this->cadastrar($dados);
				$this->load->view('sisgapsavesucess.php'); 
			}
        }
	}
	//Redireciona o cadastro para o model que irá linkar ao banco
	public function cadastrar($dados)
	{
		$this->load->model('usuarios_model');
		$this->usuarios_model->salvar($dados);	
	}
	//Parte logada no sistema
	public function logged()
	{
		//Verificar Login do Usuario
		checkLogin();
		$this->load->view('Front-end/sisgapLoggedView');
	}
	
	//Funcao para carregar a view de alteracao de dados
	public function change(){
		checkLogin();
		//Daqui para baixo e onde pego informaçoes do banco do usuario logado e adiciono no post
		$this->load->model('usuarios_model');
		$CPFtemp = $_SESSION['cpf-acesso'];
		$data = $this->usuarios_model->listData($CPFtemp);

		$_POST['Nome'] = $data['Nome'];
		$_POST['Nascimento'] = $data['Nascimento'];
		$_POST['CPF'] = $data['CPF'];;
		$_POST['RG'] = $data['RG'];
		$_POST['Endereco'] = $data['Endereco'];
		$_POST['Bairro'] = $data['Bairro'];
		$_POST['Cidade'] = $data['Cidade'];
		$_POST['CEP'] = $data['CEP'];
		$_POST['Estado'] = $data['Estado'];
		$_POST['Pais'] = $data['Pais'];
		$_POST['Celular'] = $data['Celular'];
		$_POST['Telefone'] = $data['Telefone'];
		$_POST['Email'] = $data['Email'];
		$_POST['Graduacao'] = $data['Graduacao'];
		//$_POST['PosGraduacao'] = $data['PosGraduacao'];
		$_POST['AreaposGrad'] = $data['AreaposGrad'];
		//$_POST['PExpDoc'] = $data['PExpDoc'];
		$_POST['ExpProf'] = $data['ExpProf'];
		$_POST['ExpEAD'] = $data['ExpEAD'];
		//$_POST['ConhecInfo'] = $data['ConhecInfo'];
		$_POST['Curriculo'] = $data['Curriculo'];
		//$_POST['AtuaTutor'] = $data['AtuaTutor'];
		$_POST['OutrasInfo'] = $data['OutrasInfo'];
		$this->load->view('Front-end/sisgapEditProfile');
	}
	//Atualiza os dados no Banco pós login
	public function update()
	{
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
		$this->form_validation->set_rules ('Telefone', 'Telefone', 'required|min_length[10]|max_length[14]', array('required' => 'O campo Telefone é obrigatório!'));
		$this->form_validation->set_rules ('Celular', 'Celular', 'required|required|min_length[10]|max_length[14]', array('required' => 'O campo Celular é obrigatório!'));
		$this->form_validation->set_rules ('Email', 'E-mail','trim|required|valid_email', array('valid_email' => 'Email inválido!'));
		$this->form_validation->set_rules ('Graduacao', 'Graduação', 'required', array('required' => 'O campo Graduação é obrigatório!'));
		$this->form_validation->set_rules ('PosGraduacao', 'Pós-Graduação', 'required', array('required' => 'Preencha este campo!'));
		$this->form_validation->set_rules ('AreaposGrad', 'Área Pós-Graduação', 'required');
	    $this->form_validation->set_rules ('PExpDoc', 'Possui experiência em docência?', 'required');
		$this->form_validation->set_rules ('ExpProf', 'Experiência(s) Profissional', 'required');
		$this->form_validation->set_rules ('ExpEAD', 'Experiência(s) Profissional na área de EAD', 'required');
		$this->form_validation->set_rules ('ConhecInfo', 'Nível de Conhecimento em informática', 'required');
		$this->form_validation->set_rules ('Curriculo', 'Currículo Lattes', 'required', array('required' => 'Preencha este campo!'));
		$this->form_validation->set_rules ('OutrasInfo', 'Outras informações adicionais', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run() == FALSE)
		{
			//$this->session->set_flashdata('error', 'Dados inválidos !');
			//$this->load->view('Front-end/sisgapSuccessLogin.php');
			$erros = array('erro' => validation_errors()); 
			$this->load->view('Front-end/sisgapEditProfile.php', $erros);

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

			$this->load->model('usuarios_model');
			if($this->usuarios_model->update($CPFtemp, $altera))
			{
				$this->session->set_flashdata('alterados', 'Dados alterados com sucesso!');
				$this->load->view('Front-end/sisgapEditProfile.php');
			} 
			else 
			{
				$this->session->set_flashdata('alterados', 'Erro ao alterar os dados!');
				$this->load->view('Front-end/sisgapEditProfile.php');
			}
		}
	}

	public function Quit(){
		unset($_SESSION['cpf-acesso']);
		unset($_SESSION['senha-acesso']);
		$this->session->set_userdata('Logado', FALSE);
		redirect('inicio', 'refresh');
	}
}

//https://github.com/marcelod/codeistrap/blob/master/application/config/form_validation.php
