<?php
namespace App\Models;

use CodeIgniter\Model;

class PersonasModel extends Model {
protected $table='personas';
protected $primarykey='personasId';
protected $allowedField=['personasId','personasNombre','personasApellido','personasTitulo','personasUsername'];

    public function listaPersonas(){
        $db=db_connect();
       $query=("SELECT * FROM  personas");
        return $db->query($query)->getResult();
    }

    public function crearpersonas($datos){
        $insertar=$this->db->table('personas');
        $insertar->insert($datos);
        return $this->db->insertID();
    }

    public function obtenerNombre($id) {
        $db=db_connect();
        $query=("SELECT * FROM  personas where personasId='".$id."'");
         return $db->query($query)->getResult();
    }

    public function actualizar($data, $id) {
        $res = $this->db->table('personas');
        $res->set($data);
        $res->where('personasId', $id);
        return $res->update();
    }

    public function eliminar($id){
        $db=db_connect();
        $query=("DELETE FROM personas where personasId='".$id."'");
         return $db->query($query);
    }

}

