<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//ESTE CONTROLADOR É RESPONSÁVEL POR EXECUTAR A FUNCAO DE CARREHGAMENTO DE DADOS DO BANCO PARA A VIEW DE ALTERAÇÃO
//Implementado separado devido ao fato de uma manutenção expecífica e de fácil alteração.

class ControllerAdm extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('form_validation');
		//$this->load->library('session');
    }

    public function AdmBegin(){
        $this->load->view('AdminAcess/sisgapAdmBegin.php');
	}
	public function CadDisciplina(){
		$this->load->view('AdminAcess/sisgapAdmCadDisciplinas.php');
	}
}