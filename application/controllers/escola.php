<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Escola extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('entidades/escola_model');
    }

    public function getEntidade() {
        $escola = $this->escola_model;
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($escola);
    }

}
