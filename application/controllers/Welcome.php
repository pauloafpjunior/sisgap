<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		// Consultar: https://codeigniter.com/user_guide/general/models.html
		// Consultar: https://codeigniter.com/user_guide/general/views.html

		$this->load->model('mensagem_model');
		$dados['titulo'] = 'Minhas Mensagens';
		$dados['mensagens'] = $this->mensagem_model->obter_todas();
		$this->load->view('welcome_message', $dados);
	}

	public function salvar() {

		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() === FALSE) {
			$this->index();	
		} else {
			// Gravar no banco
			$this->load->model('mensagem_model');
			$this->mensagem_model->salvar();
			$this->index();	
		}
	}
}
