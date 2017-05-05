<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aluno extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('entidades/aluno_model');
    }

    public function getEntidade() {
        $escola = $this->aluno_model;
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($escola);
    }

}
