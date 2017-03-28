<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localizacao extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('localizacao_model');
	}

	
     
	 
	//Página Principal
	public function index()
	{
		//Biblioteca de Formulário e Link
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('endereco','Endereco','required');	
		
		//Visualização dos dados 
		 if($this->form_validation->run()==FALSE){
		 
		    $this->load->view('template/tela_principal');
	     
	     }
	     
	     else{

	     	 //$dados['latitude'] = $this->input->post('latitude');
             //$dados['longitude'] = $this->input->post('longitude');
             //$dados['endereco'] = $this->input->post('endereco');
			 $dados = $this->input->post();

              //Visualização dos dados 
		      $this->load->view('template/cadastrar',$dados);

	     }

	
	}

   
		

	public function salvar()
	
	{
		//Biblioteca de Formulário e Link
		$this->load->helper(array('form','url'));
		
		$dados = $this->input->post();
		
        $confirma = $this->localizacao_model->add($dados);

        redirect('localizacao/index');

     
    }
    public function login()
	
	{
		$this->load->helper(array('form','url'));
		$this->load->view('template/login');
		
	}
	
	
    public function listar()
	
	{
		$this->load->helper(array('form','url'));
		$info["listCadastro"] = $this->localizacao_model->listar();
		

		$this->load->view('template/listar',$info);
		
	}
	


	public function excluir($id){
		$this->load->helper(array('form','url'));
		$delete = $this->localizacao_model->excluir($id);
		redirect('localizacao/listar');
		
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */