<?php
namespace app\controllers;
use lib\controller;
use app\models\VisitanteModel;
use Visitante;
class HomeController extends controller{
    public function index(){
        return $this->view('HomeView', [
            'title'=>'Inicio'
        ]);
    }

    public function sds(){
        return $this->view('SDSView', [
            'title'=>'SDS'
        ]);
    }

    public function miperfil(){
        return $this->view('PerfilView', [
            'title'=>'Mi Perfil'
        ]);
    }

    public function aseis(){
        return $this->view('ASEISView', [
            'title'=>'ASEIS'
        ]);
    }

    public function visitantes(){
        $visitante = new VisitanteModel();
        $data = $visitante->getVisitante();
        return $this->view('HomeVisitantes', [
            'title'=>'Visitantes',
            'dataVisitantes'=>$data
        ]);
    }

    public function registro(){
        return $this->view('HomeRegistro', [
            'title'=>'Registro'
        ]);
    }

    public function registrar(){
        if($_POST){
            $visita = new VisitanteModel();
            $visita->guardarVisitante($_POST);
            $data = $visita->getVisitante();
            return $this->view('HomeVisitantes', [
                'title'=>'Visitantes',
                'dataVisitantes'=>$data
            ]);
        }
    }

    public function patrocinadores(){
        return $this->view('PatrocinadoresView', [
            'title'=>'Patrocinadores'
        ]);
    }
    
}
?>