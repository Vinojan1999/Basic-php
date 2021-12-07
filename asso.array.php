<?php

    $cars = array("BMW"=>"i8", "Audi"=>"A6", "Ford"=>"Mustang");
    echo "The best sports car is Ford ".$cars['Ford'].". Its manufactured by Ford motors.";
    echo "<br>";
    ///////////////////////

    $car = array("BMW"=>"i8", "Audi"=>"A6", "Ford"=>"Mustang");
    foreach($car as $company => $model) {
        echo $company." => ".$model;
        echo "<br>";
    }
    //////////////////////

?>