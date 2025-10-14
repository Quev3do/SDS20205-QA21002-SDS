<?php
use lib\Route;
use app\controllers\HomeController;

//Route::get("/", function(){ echo "RUTA RAIZ"; });

Route::get("/inicio", [HomeController::class, 'index']);

Route::get("/visitantes", [HomeController::class, 'visitantes']);

Route::get("/registro", [HomeController::class, 'registro']);

Route::post("/registrar");

Route::dispatch();
?>