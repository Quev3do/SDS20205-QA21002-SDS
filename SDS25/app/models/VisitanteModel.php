<?php
namespace app\models;

use lib\database;

class VisitanteModel extends database{
    public function getVisitante(){
        $conexion = $this->getConnection();
        $sql = $conexion->query("SELECT * FROM visitantes");
        return $sql->fetchAll();
    }

    public function guardarVisitante($data){
        $conexion = $this->getConnection();
        $stmt = $conexion->prepare("INSERT INTO visitantes(name, apellido, correo, carnet) VALUES(?,?,?,?)");
        $stmt ->bindParam(1,$data['name']);
        $stmt ->bindParam(2,$data['apellido']);
        $stmt ->bindParam(3,$data['correo']);
        $stmt ->bindParam(4, $data['carnet']);
        if ($stmt->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function getIdVisitante($idVisitante){
        $conexion = $this->getConnection();
        $sql = $conexion->prepare("SELECT * FROM visitantes WHERE idVisitante=?");
        $sql->execute([$idVisitante]);
        return $sql->fetchAll();
    }
}
?>