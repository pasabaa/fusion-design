<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

    //servidor/carpeta-de-proyecto/index.php/controlador/método


    public function __construct(){
        parent::__construct();
        $this->load->model('Proyecto_model');
        $this->load->model('Categoria_model');
    }

    public function index(){
        
        $data['categorias'] = $this->Categoria_model->listar();

        $data['title'] = 'Categorias';
        $data['content'] = 'proyectos/index';

        $this->load->view('template/template', $data);
    }

    public function listado(){

        $data['proyectos'] = $this->Proyecto_model->listar();

        $data['title'] = 'Proyectos';
        $data['content'] = 'proyectos/listado';

        $this->load->view('template/template', $data);
    }

    /*
    public function proyectos(){

        //Llamar metodo desde Producto_model
        $data['proyectos'] = $this->Proyecto_model->listar();

        $data['title'] = 'Proyectos';
        $data['content'] = 'proyectos/proyectos';

        $this->load->view('template/template', $data);

    }*/

    public function formulario(){

        $data['title'] = 'Proyectos';
        $data['content'] = 'proyectos/form_productos';

        $this->load->view('template/template', $data);
    }

}
