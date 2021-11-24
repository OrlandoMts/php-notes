<?php

$fruits = array('manzana', 'platano', 'pera', 'melon', 'fresa');

$form = "<form action='script-desafio.php' style='display: flex; flex-direction: column; width: 30%; height: 300px;'>";
$btnPlay = "<button type='submit'>Jugar</button>";
$closeForm = "</form>";

for ($i=0; $i < count($fruits); $i++) { 
    //str_suffle desordena cada palabra del array fruits
    $form .= "<label for='palabra" . $i . "' > " . str_shuffle($fruits[$i]) . "</label>" .
        "<input type='text' name='palabra" . $i . "' id='palabra" . $i . "'>" .
        "<br>";
}

echo $form.$btnPlay.$closeForm;

for ($i = 0; $i < count($fruits); $i++) {
    if ($_REQUEST["palabra".$i] === $fruits[$i]) {
        echo "Fruta Correcta (Escribiste:{$_REQUEST['palabra'.$i]})<br>";
    } else {
        echo "Fruta Incorrecta (Escribiste:{$_REQUEST['palabra'.$i]})<br>";
    }
}