<?php
    $name = 'Orlando';
    $lastName ='Montes';

    function concatenar($name, $lastName)
    {
        $fullName = $name . ' ' . $lastName;
        
        return $fullName;
    }

    echo concatenar($name, $lastName) . PHP_EOL;

    function sumNumbers($numbersArray){
        $sum = 0;
        
        // for($i=0; $i<count($numbersArray); $i++){
        //     $sum = $sum + $numbersArray[$i];
        // }
            //Ambas opciones son validas
        foreach($numbersArray as $numberArray) {
            $sum += $numberArray;
        }

        return $sum;
    }

    $numbersArray = array(1,2,7,5,4);
    echo "La suma de los valores del array es: " 
    . sumNumbers($numbersArray) 
    . PHP_EOL;

    $names = ['Ana', 'Juan', 'Camila'];

    //is_array($array); sirve para ver si es array
    var_dump(is_array($names));
?>