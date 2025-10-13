<?php
use lib\Route;
use app\controllers\HomeController;

//Route::get("/", function(){ echo "RUTA RAIZ"; });

Route::get("/", [HomeController::class, 'index']);

Route::get("/inicio/:flag", function($flag){
    return ["title"=>"ejemplo"];
});

Route::dispatch();
?>