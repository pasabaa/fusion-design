<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Integrante_model extends CI_Model {

    private $idIntegrante;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $rol;

    public function __construct(){

        parent::__construct();
        
    }
    
    public function getIdIntegrante()
    {
        return $this->idIntegrante;
    }

    public function setIdIntegrante($idIntegrante)
    {
        $this->idIntegrante = $idIntegrante;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;

        return $this;
    }

    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;

        return $this;
    }
    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
    

    public function listar(){

        /*$this->db->select('*');
        $this->db->from('proyectos');
        $consulta = $this->db->get('proyectos');*/

        $consulta = $this->db->get('integrantes'); //SELECT * FROM proyectos

        $resultado = $consulta->result();

        //$cantidad = $consulta->num_rows();

        return $resultado;

    }

}