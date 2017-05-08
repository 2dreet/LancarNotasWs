<?php

class Escola_model extends CI_Model {

    public $id;
    public $descricao;
    public $usuario;
    public $ativo;

    function __construct() {
        parent::__construct();
        $this->id = null;
        $this->descricao = null;
        $this->usuario = null;
        $this->ativo = true;
    }

    function getObjeto($escolaId) {
        $query = $this->db->query("SELECT * FROM escola where id = " . $escolaId);
        foreach ($query->result() as $row) {
            $this->id = $row->id;
            $this->descricao = $row->descricao;
            $this->usuario = $row->usuario;
            $this->ativo = $row->ativo;
        }
    }

    function setObjeto($objeto) {
        if (isset($objeto['id']) && $objeto['id'] != null) {
            $this->id = $objeto['id'];
        } else {
            unset($this->id);
        }
        $this->descricao = $objeto['descricao'];
        $this->usuario = $objeto['usuario'];
        $this->ativo = $objeto['ativo'];
    }

    public function insert() {
        $this->load->database();
        return $this->db->insert('escola', $this);
    }

    public function update() {
        $this->load->database();
        $this->db->where('id', $this->id);
        $this->db->where('usuario', $this->usuario);
        $this->db->update('escola', $this);
    }

}
