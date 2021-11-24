<?php
    $valorA = 2;

    switch($valorA){
        case 1:
            echo "El valor es 1";
            break;
        case 2:
            echo "El valor es 2";
            break;
        case 3:
            echo "El valor es 3";
            break;
        default:
            echo "Ha de ser un valor mayor a 3";
            break;
    }

    $note = 'C';

    switch($note){
        case 'A':
            echo "Tienes $note como nota, excelente!";
            break;
        case 'B':
            echo "Tienes $note como nota, bien, puedes mejorar.";
            break;
        case 'C':
            echo "Tienes $note como nota, debes volver a rendir el examen.";
            break;
        case 'D':
            echo "Tienes $note como nota, reprobaste.";
            break;
        default:
            echo "$note es una nota incorrecta.";
            break;
    }
?>