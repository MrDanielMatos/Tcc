<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Login extends CI_Controller{ // criação da classe Login
 	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
		//Página Principal
	public function index()
	{
		//Visualização dos dados 

		$this->load->helper(array('form','url'));
		$this->load->view('template/login');
		
	}

    public function autenticar(){

 		//Biblioteca de Formulário e Link
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Usuario','required');	
		$this->form_validation->set_rules('senha','Senha','required');
		if($this->form_validation->run()==FALSE){
		 
		    $this->load->view('template/login');
	     
	     }
		else{
			$this->load->model("login_model");// chama o modelo usuarios_model
			$email = $this->input->post("email");// pega via post o email que venho do formulario
			$senha = $this->input->post("senha"); // pega via post a senha que venho do formulario
			$usuario = $this->login_model->buscaPorEmailSenha($email,$senha); // acessa a função buscaPorEmailSenha do modelo

			if($usuario){
				$this->load->library('session');
				$this->session->set_userdata("usuario_logado", $usuario);
				// $dados = array("mensagem" => "Logado com sucesso!");
				//Carrega tela principal
				$this->load->view('template/tela_principal');
			
			}
			else{
				
			  $this->load->view('template/login');
			}
		

			
			
		}

    }
		public function cadastra(){
		$this->load->helper(array('form','url'));
		$this->load->view('template/teste');
		
		
	}
	
	public function salvar(){
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','Nome','required');	
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('senha','Senha','required');
		$this->form_validation->set_rules('confirma_senha','Confirme a Senha','required|matches[senha]');
		if($this->form_validation->run()==FALSE){
		 
		    $this->load->view('template/teste');
	     
	     }
		else{
			
			$this->load->helper(array('form','url'));
			$dados = $this->input->post();
			unset( $dados['confirma_senha'] );
			$confirma = $this->login_model->add($dados);
			redirect('login/index');
		}
	}
	
}