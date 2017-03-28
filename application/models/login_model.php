<?php
class Login_model extends CI_Model{
	var $email   = '';
    var $senha = '';
	
   function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
    public function buscaPorEmailSenha($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }
	public function add($dados){
        return $this->db->insert("usuarios",$dados);
    }
}