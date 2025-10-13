<?php
namespace app\controllers;
use lib\controller;
use app\models\VisitanteModel;
use Visitante;
class HomeController extends controller{
    public function index(){
        return $this->view('HomeView');
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
        return $this->view('HomeRegistro');
    }
    
}
?>