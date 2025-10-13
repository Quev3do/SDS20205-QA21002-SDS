<?php
use lib\Route;
use app\controllers\HomeController;

//Route::get("/", function(){ echo "RUTA RAIZ"; });

Route::get("/", [HomeController::class, 'index']);

Route::get("/visitantes", [HomeController::class, 'visitantes']);

Route::get("/registro", [HomeController::class, 'registro']);

Route::dispatch();
?>