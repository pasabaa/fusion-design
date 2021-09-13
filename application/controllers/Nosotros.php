<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Integrante_model');
    }

    public function index(){

        $data['integrantes'] = $this->Integrante_model->listar();

        $data['title'] = 'Nosotros';
        $data['content'] = 'nosotros/index';

        $this->load->view('template/template', $data);
    }

}