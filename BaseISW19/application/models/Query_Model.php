<?php

class Query_Model extends CI_Model{

 /* =============================================================================================================================================================================================================================== */


/* =============================================================================================================================================================================================================================== */


/* =============================================================================================================================================================================================================================== */



/* START - CONTROLLER: Dashboard */



/* END - CONTROLLER: Dashboard */

/* START - CONTROLLER: Usuarios */

function InsertUsuario($datosusuario){
    $this->db->insert('usuarios',$datosusuario);
}
function GetUserByName($usuario){
    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('username',$usuario);
    $query = $this->db->get();
    return $query->result();
}

function DatosUsuario(){

    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where("(rol= 'A' OR rol = 'E')",NULL,FALSE);
    $query = $this->db->get();
    return $query->result();
}

function GetUserById($id){

    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('id_usuario',$id);
    $query = $this->db->get();
    return $query->result();

}

function UpdateUsuario($id,$datosusuario){

    $this->db->where('id_usuario',$id);
    $this->db->update('usuarios',$datosusuario);

}


/* END - CONTROLLER: Usuarios */

// ------------------------------------------------------------------------------------------------------

/* START - CONTROLLER: Clientes */

function DatosCliente(){

    $this->db->select('*');
    $this->db->from('clientes');
    $query = $this->db->get();
    return $query->result();
}


function HorariosPorCliente($id){

    $this->db->select('*');
    $this->db->from('horarios');
    $this->db->where('id_cliente',$id);
    $query = $this->db->get();
    return $query->result();

}

function InsertCliente($datosusuario){
    $this->db->insert('clientes',$datosusuario);
}
function GetClienteByName($usuario){
    $this->db->select('*');
    $this->db->from('cliente');
    $this->db->where('username',$usuario);
    $query = $this->db->get();
    return $query->result();
}

// function DatosUsuario(){

//     $this->db->select('*');
//     $this->db->from('usuarios');
//     $this->db->where("(rol= 'A' OR rol = 'E')",NULL,FALSE);
//     $query = $this->db->get();
//     return $query->result();
// }

function GetClienteById($id){

    $this->db->select('*');
    $this->db->from('clientes');
    $this->db->where('id_cliente',$id);
    $query = $this->db->get();
    return $query->result();

}

function UpdateCliente($id,$datosusuario){

    $this->db->where('id_cliente',$id);
    $this->db->update('clientes',$datosusuario);

}


/* END - CONTROLLER: Usuarios */

}






