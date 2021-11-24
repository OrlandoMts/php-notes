<?php 
    $arreglo = [
        'color' => 'verde',
        'lugar' => 'cd madero',
        'año' => 2021,
        ];

    foreach ($arreglo as $key => $value) {
        echo $key . '=' . $value . PHP_EOL;
        //PHP_EOL sirve para que la impresion no salga en una sola linea
    };
?>