<?php

$edad = rand(1,15);


function lugarJuguetes($edad) {
    switch ($edad) {
        case $edad <= 5:
            echo "El estudiante con $edad años tendrá sus juguetes en la parte inferior de la bodega.";
            break;
        case ($edad > 5 && $edad <= 7):
            echo "El estudiante con $edad años tendrá sus juguetes en la parte media de la bodega.";
            break;
        case ($edad > 7 && $edad <= 12):
            echo "El estudiante con $edad años tendrá sus juguetes en la parte alta de la bodega.";
            break;
        default:
            echo "En estudiante con $edad años tendrá sus juguetes en la parte de a lado de la bodega.";
            break;
    }
}

lugarJuguetes($edad);