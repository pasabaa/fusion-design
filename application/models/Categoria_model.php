<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    private $idCategoria;
    private $nombreC;
    private $descripcionC;

    public function __construct(){

        parent::__construct();
        
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function getNombreC()
    {
        return $this->nombreC;
    }

    public function setNombreC($nombreC)
    {
        $this->nombreC = $nombreC;

        return $this;
    }

    public function getDescripcionC()
    {
        return $this->descripcionC;
    }

    public function setDescripcionC($descripcionC)
    {
        $this->descripcionC = $descripcionC;

        return $this;
    }
    
    public function listar(){

        /*$this->db->select('*');
        $this->db->from('proyectos');
        $consulta = $this->db->get('proyectos');*/

        $consulta = $this->db->get('categorias'); //SELECT * FROM proyectos

        $resultado = $consulta->result();

        //$cantidad = $consulta->num_rows();

        return $resultado;

    }

}