<?php

class Localizacao_model extends CI_Model {

    var $endereco   = '';
    var $latitude = '';
    var $longitude    = '';
    var $local = '';
    var $responsavel;


    /*function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }*/


   function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    
    public function add($dados){
        return $this->db->insert("localizacao",$dados);
    }



   public function listar(){
        $this->db->order_by("id","desc");
        $query = $this->db->get("localizacao");
        return $query->result();
    }

    public function excluir($id){
        $this->db->where("id",$id);
        return $this->db->delete("localizacao");
        
    }

   

    

}

?>