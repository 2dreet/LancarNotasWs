<?php

class Aluno_model extends CI_Model {

    public $id;
    public $nome;
    public $numero;
    public $usuario;
    public $ativo;

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->id = null;
        $this->nome = null;
        $this->numero = null;
        $this->usuario = true;
        $this->ativo = true;
    }

    public function inserir() {
        return $this->db->insert('aluno', $this);
    }

}
