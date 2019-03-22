<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//ESTE CONTROLADOR É RESPONSÁVEL POR EXECUTAR A FUNCAO DE CARREHGAMENTO DE DADOS DO BANCO PARA A VIEW DE ALTERAÇÃO
//Implementado separado devido ao fato de uma manutenção expecífica e de fácil alteração.

class Controllerchange extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

    //Funcao para carregar a view de alteracao de dados
	public function change(){
		checkLogin(); //Função para verifica a autenticação no sistema (Se está logado)
		//Daqui para baixo e onde pego informaçoes do banco do usuario logado e adiciono no post e em arrays para que 
		//seje carregado os DropDowns na view de alteração
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

		$this->load->view('Front-end/Configs/DarkLightColors/sisgapEditProfile',$dados);  //Chamada da view com o parametro
		//obtidos acima
	}
}