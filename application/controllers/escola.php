<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Escola extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('entidades/escola_model');
    }

    public function insertEntidade() {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data != null) {
            $escola = $this->escola_model;
            $escola->setObjeto($data);
            $escola->insert();

            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(array('msgRetorno' => 'Cadastrado com sucesso!'));
        }
    }

    public function getEntidade() {
        $escola = $this->escola_model;
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($escola);
    }

}
