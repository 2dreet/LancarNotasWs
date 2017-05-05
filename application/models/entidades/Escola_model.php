<?php

class Escola_model extends CI_Model {

    public $id;
    public $descricao;
    public $usuario;
    public $ativo;

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->id =null;
        $this->descricao = null;
        $this->usuario = null;
        $this->ativo = true;
    }

    public function inserir() {
        return $this->db->insert('escola', $this);
    }

}
