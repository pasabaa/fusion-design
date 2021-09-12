<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

    private $idProyecto;
    private $proyecto;

    public function __construct(){

        parent::__construct();
        
    }

    public function getIdProyecto()
    {
        return $this->idProyecto;
    }


    public function setIdProyecto($idProyecto)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    public function getProyecto()
    {
        return $this->proyecto;
    }

    public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    
    public function listar(){

        /*$this->db->select('*');
        $this->db->from('proyectos');
        $consulta = $this->db->get('proyectos');*/

        $consulta = $this->db->get('proyectos'); //SELECT * FROM proyectos

        $resultado = $consulta->result();

        //$cantidad = $consulta->num_rows();

        return $resultado;

    }
}