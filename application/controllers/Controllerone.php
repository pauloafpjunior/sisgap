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
				if($this->usuarios_model->checkStatus($dados_form['CPF']) == 1){
					//Aqui irei carregar a tela de Sucesso
					//Aqui neste momento já verifiquei se a conta esta ativada
					//Essa funcao abaixo e para falar que o usuarios esta logado
					$this->session->set_userdata('Logado', TRUE);
					$this->session->set_userdata('cpf-acesso', $dados_form['CPF']);
					$this->session->set_userdata('senha-acesso', $dados_form['Senha']);
					redirect('logged');
				} else {
					$this->session->set_flashdata('error', '<div class="p-3 mb-2 bg-danger text-white shadow-lg p-3 mb-5 bg-danger rounded">Sua conta ainda não foi ativada !</div>');
					redirect('inicio', 'refresh');
				}
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
		$this->form_validation->set_rules ('Telefone', 'Telefone', 'required|min_length[10]|max_length[17]', array('required' => 'O campo Telefone é obrigatório!'));
		$this->form_validation->set_rules ('Celular', 'Celular', 'required|required|min_length[10]|max_length[17]', array('required' => 'O campo Celular é obrigatório!'));
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
		$this->form_validation->set_rules ('OutrasInfo', 'Outras informações adicionais');

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
				$key = md5(microtime().rand());
				//Caso contrario ele salva no banco e mostra uma view de sucesso
				$dados = [
					'status' => FALSE,
					'token_verificacao' => $key,
					'Nome' => $this->input->post('Nome'),
					'Nascimento' => $this->input->post('Nascimento'),
					'RG' => $RGverifica,
					'CPF' => $CPFverifica,
					'Senha' => md5($this->input->post('Senha')),
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
				
				if($this->cadastrar($dados)){
					$email = $this->input->post('Email');
					if($this->sendMail($email, $key)){
						$this->load->view('Front-end/sisgapActivateTutorial.php'); 
					} else {
						echo 'ERRO AO ENVIAR O EMAIL';
					}
				} else {
					echo 'ERRO AO GRAVAR NO BANCO DE DADOS';
				}
				
			}
        }
	}
	//Redireciona o cadastro para o model que irá linkar ao banco
	public function cadastrar($dados)
	{
		$this->load->model('usuarios_model');
		if($this->usuarios_model->salvar($dados)){
			return true;
		} else {
			return false;
		}
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

		//Aqui eu crio os arrays que serao exibidos como dropdowns

		$dados['dadosEstado'] = array(
			'ac' => 'Acre',
			'al' => 'Alagoas',
			'am' => 'Amazonas',
			'ap' => 'Amapá',
			'ba' => 'Bahia',
			'ce' => 'Ceará',
			'df' => 'Distrito Federal',
			'es' => 'Espírito Santo',
			'go' => 'Goiás',
			'ma' => 'Maranhão',
			'mt' => 'Mato Grosso',
			'ms' => 'Mato Grosso do Sul',
			'mg' => 'Minas Gerais',
			'pa' => 'Pará',
			'pb' => 'Paraíba',
			'pr' => 'Paraná',
			'pe' => 'Pernambuco',
			'pi' => 'Piauí',
			'rj' => 'Rio de Janeiro',
			'rn' => 'Rio Grande do Norte',
			'ro' => 'Rondônia',
			'rs' => 'Rio Grande do Sul',
			'rr' => 'Roraima',
			'sc' => 'Santa Catarina',
			'se' => 'Sergipe',
			'sp' => 'São Paulo',
			'to' => 'Tocantins'

		);

		$dados['dadosPosGrad'] = array(
			'0' => 'Não possui pós-graduação',
			'1' => 'Pós-Graduação lato sensu (especialização em andamento)',
			'2' => 'Pós-Graduação lato sensu (especialização)',
			'3' => 'Pós-Graduação stricto sensu (mestrado em andamento)',
			'4' => 'Pós-Graduação stricto sensu (especialização concluída com mestrado em andamento)',
			'5' => 'Pós-Graduação stricto sensu (mestrado concluído)',
			'6' => 'Pós-Graduação stricto sensu (mestre com doutorado em andamento)',
			'7' => 'Pós-Graduação stricto sensu (doutorado direto concluído)',
			'8' => 'Pós-Graduação stricto sensu (mestrado e doutorado concluídos)',
			'9' => 'Pós-Graduação stricto sensu (Pós-doutorado concluído)'
		);

		$dados['dadosExpDoc'] = array(
			'0' => 'Sim',
			'1' => 'Não'
		);

		$dados['dadosConhecInfo'] = array(
			'0' => 'Básico',
			'1' => 'Intermediário',
			'2' => 'Avançado'
		);

		$dados['dadosAtuaTutor'] = array(
			'0' => 'Sim',
			'1' => 'Não'
		);

		//Aqui armazeno as opções selecionadas pelo usuario no array que ira para a view
		$dados['Est'] = $data['Estado'];
		$dados['PosG'] =  $data['PosGraduacao'];
		$dados['PExpD'] = $data['PExpDoc'];
		$dados['ConInf'] = $data['ConhecInfo'];
		$dados['AtuaT'] = $data['AtuaTutor'];

		//Aqui eu defino manualmente os posts da view de edicao de dados de acordo com os dados do usuario
		//Note que eu uso uma variavel global para fazer isso
		$_POST['Nome'] = $data['Nome'];
		$_POST['Nascimento'] = $data['Nascimento'];
		$_POST['CPF'] = $data['CPF'];;
		$_POST['RG'] = $data['RG'];
		$_POST['Endereco'] = $data['Endereco'];
		$_POST['Bairro'] = $data['Bairro'];
		$_POST['Cidade'] = $data['Cidade'];
		$_POST['CEP'] = $data['CEP'];
		$_POST['Pais'] = $data['Pais'];
		$_POST['Celular'] = $data['Celular'];
		$_POST['Telefone'] = $data['Telefone'];
		$_POST['Email'] = $data['Email'];
		$_POST['Graduacao'] = $data['Graduacao'];
		$_POST['AreaposGrad'] = $data['AreaposGrad'];
		$_POST['ExpProf'] = $data['ExpProf'];
		$_POST['ExpEAD'] = $data['ExpEAD'];
		$_POST['Curriculo'] = $data['Curriculo'];
		$_POST['OutrasInfo'] = $data['OutrasInfo'];

		$this->load->view('Front-end/sisgapEditProfile',$dados);
	}
	//Atualiza os dados no Banco pós login
	public function update()
	{
		checkLogin();
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
				$this->load->view('Front-end/sisgapLoggedView.php');
			} 
			else 
			{
				$this->session->set_flashdata('alterados', 'Erro ao alterar os dados!');
				$this->load->view('Front-end/sisgapEditProfile.php');
			}
		}
	}

	//Funcoes para a alteração de senha
	public function changePass(){
		$this->load->view('Front-end/sisgapEditPassword.php');
	}

	public function newPass(){
		checkLogin();
		$this->form_validation->set_rules ('Senha', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_rules ('newSenha', 'newSenha', 'trim|required|min_length[6]', array('required' => 'O campo Nova Senha é obrigatório!'));
		$this->form_validation->set_rules ('confnewSenha', 'Confirmar Nova Senha','trim|required|matches[newSenha]', array('matches' => 'As novas senhas não coincidem!', 'required' => 'O campo confirmar Nova Senha é obrigatório!'));
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run() == FALSE)
		{
			$erros = array('erro' => validation_errors()); 
			$this->load->view('Front-end/sisgapEditPassword.php', $erros);

		} else {
			$this->load->model('usuarios_model');
			$CPF = $_SESSION['cpf-acesso'];
			$Senha = md5($this->input->post('Senha'));
			if($this->usuarios_model->loginVerifica($CPF,$Senha)){
				$altera = [
					'Senha' => md5($this->input->post('newSenha'))
				];
				if($this->usuarios_model->update($CPF, $altera)){
					$this->session->set_flashdata('alterados', 'Senha alterada com sucesso!');
					$this->load->view('Front-end/sisgapLoggedView.php');
				} else {
					$this->session->set_flashdata('alterados', 'Erro ao alterar a Senha!');
					$this->load->view('Front-end/sisgapLoggedView.php');
				}
			} else {
				$this->session->set_flashdata('alterados', 'Senha Atual incorreta !');
				$this->load->view('Front-end/sisgapEditPassword.php');
			}
		}
	}

	//Funcao para loggout do sistema
	public function Quit(){
		unset($_SESSION['cpf-acesso']);
		unset($_SESSION['senha-acesso']);
		$this->session->set_userdata('Logado', FALSE);
		$this->session->unset_userdata('Logado');
		$this->session->unset_userdata('cpf-acesso');
		$this->session->unset_userdata('senha-acesso');

		redirect('inicio', 'refresh');
	}

	//Funcao para enviar email para testes
	public function sendMail($email, $key){

		$this->load->library('email');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'sisgapufla@gmail.com',
			'smtp_pass' => 'faju111998',
			'mailtype' => 'html',
			'charset' => 'utf-8'
			//'wordwrap' => TRUE
		);  
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$this->email->from('sisgapufla@gmail.com', 'Sisgap');
		$this->email->to($email);
		$this->email->subject('Olá, Bem-Vindo ao Sisgap');
		$message = "<strong><p>Olá bem vindo ao Sisgap<p></strong>
					<p>Segue abaixo o seu código de ativação de conta, copie-o e acesse o link abaixo<p>
					<p>Codigo para copiar : $key<p>
					<p>Agora Acesse o link: http://localhost/sisgap/validtoken <br/><br/><br/>
					<small>Esta é uma mensagem automática</small>
					";
		$this->email->message($message);
		//$this->email->message('Agora acesse o link abaixo:');
		//$this->email->message('Link aqui');
		$result = $this->email->send();
		$this->email->print_debugger(); 
		return ($result) ? true : false;
	}

	//Funcao para a view de ativação de token
	public function validToken(){
		$this->load->view('Front-end/sisgapValidToken.php');
	}

	//Funcao para atualizar o token no banco de dados
	public function updateToken(){
		$this->form_validation->set_rules ('CPF', 'CPF', 'required','max_length[9]|trim|xss_clean', array('required' => 'CPF não atribuído ou inválido!'));
		$this->form_validation->set_rules ('Senha', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_rules ('Token', 'Token', 'trim|required|min_length[25]', array('required' => 'O código é necessário, preenche-o!'));
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run() == FALSE)
		{
			$erros = array('erro' => validation_errors()); 
			$this->load->view('Front-end/sisgapValidToken.php', $erros);

		} else {
			$CPF = $this->input->post('CPF');
			$Senha = md5($this->input->post('Senha'));
			$Token = $this->input->post('Token');
			$this->load->model('usuarios_model');
			if($this->usuarios_model->loginVerifica($CPF, $Senha)){
				$tokenBD = $this->usuarios_model->validToken($CPF, $Senha);
				if($tokenBD == $Token){
					$altera = ['status' => TRUE];
					if($this->usuarios_model->update($CPF, $altera)){
						$this->session->set_flashdata('sucesso', 'Parabéns, sua conta foi ativada com sucesso, volte para a página inicial e entre com Cpf e Senha, Bem-Vindo ao SisGap!');
						redirect('validtoken', 'refresh');
					} else {
						echo 'ERRO NA ATUALIZAÇÃO DO TOKEN';
					}
				} else {
					$this->session->set_flashdata('sucesso', 'O Código digitado não coincide com o esperado!');
					redirect('validtoken', 'refresh');
				}
			} else {
				$this->session->set_flashdata('sucesso', 'O Usuário não possui um pré cadastro no sistema!');
				redirect('validtoken', 'refresh');
			}
		}
	}
}

//Aqui está uma funcao para gerar id aleatorios = $key = md5(microtime().rand());

//https://github.com/marcelod/codeistrap/blob/master/application/config/form_validation.php
