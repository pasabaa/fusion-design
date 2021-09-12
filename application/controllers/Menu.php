<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    //servidor/carpeta-de-proyecto/index.php/controlador/método


    public function __construct(){
        parent::__construct();
        $this->load->model('Producto_model');
    }

    public function index(){
        
        $data['title'] = 'Inicio';
        $data['content'] = 'menu/index';

        $this->load->view('template/template', $data);
    }

    public function conocenos(){

        $data['title'] = 'Conocenos';
        $data['content'] = 'menu/conocenos';

        $this->load->view('template/template', $data);

    }

    public function contactanos(){
        
        $data['title'] = 'Contactanos';
        $data['content'] = 'menu/contactanos';

        $this->load->view('template/template', $data);

    }

    public function productos(){

        //Llamar metodo desde Producto_model
        $data['productos'] = $this->Producto_model->listar();

        $data['title'] = 'Productos';
        $data['content'] = 'menu/productos';

        $this->load->view('template/template', $data);

    }

    public function formulario(){

        $data['title'] = 'Productos';
        $data['content'] = 'menu/form_productos';

        $this->load->view('template/template', $data);
    }

}
