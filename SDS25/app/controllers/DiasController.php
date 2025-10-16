<?php
namespace app\controllers;
use lib\controller;

class DiasController extends controller{
    public function dia1(){
        return $this->view('Dia1View', [
            'title'=>'Dia 1',
        ]);
    }
    public function dia2(){
        return $this->view('Dia2View', [
            'title'=>'Dia 2',
        ]);
    }
    public function dia3(){
        return $this->view('Dia3View', [
            'title'=>'Dia 3',
        ]);
    }
    public function dia4(){
        return $this->view('Dia4View', [
            'title'=>'Dia 4',
        ]);
    }
    public function dia5(){
        return $this->view('Dia5View', [
            'title'=>'Dia 5',
        ]);
    }

}
?>