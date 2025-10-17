<?php
use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiasController;

Route::get("/", function(){ echo '<a href="inicio">inicio</a>'; });

Route::get("/inicio", [HomeController::class, 'index']);

Route::get("/sds", [HomeController::class, 'sds']);

Route::get("/aseis", [HomeController::class, 'aseis']);

Route::get("/miperfil", [HomeController::class, 'miperfil']);

Route::get("/visitantes", [HomeController::class, 'visitantes']);

Route::get("/registro", [HomeController::class, 'registro']);

Route::post("/registrar", [HomeController::class, 'registrar']);

Route::get("/patrocinadores", [HomeController::class, 'patrocinadores']);

Route::get("/dia1", [DiasController::class, 'dia1']);
Route::get("/dia2", [DiasController::class, 'dia2']);
Route::get("/dia3", [DiasController::class, 'dia3']);
Route::get("/dia4", [DiasController::class, 'dia4']);
Route::get("/dia5", [DiasController::class, 'dia5']);

Route::dispatch();
?>