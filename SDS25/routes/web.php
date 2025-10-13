<?php
use lib\Route;

Route::get("/", function(){
    echo "RUTA RAIZ";
});

Route::get("/inicio/:flag", function($flag){
    return ["title"=>"ejemplo"];
});

Route::dispatch();
?>