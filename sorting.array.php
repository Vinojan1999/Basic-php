<?php

// sort() - sort arrays in ascending order (Alphabetic or Numberic)
// rsort() - sort arrays in descending order (Alphabetic or Numberic)
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

    //First - Capital letters
    //Second - Small letters
    $cars = array("Volvo","volvo","BMW","Audi","audi","ford","Ford","Land Rover");
    sort($cars);
    $num = array(7,18,99,78,36);
    sort($num);
    $clenght = count($cars);
    $nlenght = count($num);

    echo "<b>Alphabatic</b>";
    for($x=0; $x<$clenght; $x++){
        echo "<li>".$cars[$x]."</li>";
    }
    echo "<br> <b>Numberic</b>";
    for($y=0; $y<$nlenght; $y++) {
        echo "<li>".$num[$y]."</li>";
    }
    echo "<br>";
    //////////////////////////////////////////////

    $cars2 = array("Volvo","volvo","BMW","Audi","audi","ford","Ford","Land Rover");
    rsort($cars2);
    $num2 = array(7,18,99,78,36);
    rsort($num2);
    echo "<b>Alphabatic</b>";
    for($x=0; $x<8; $x++){
        echo "<li>".$cars2[$x]."</li>";
    }
    echo "<br> <b>Numberic</b>";
    for($y=0; $y<5; $y++) {
        echo "<li>".$num2[$y]."</li>";
    }
    echo "<br>";
    //////////////////////////////////////////////

    // Acending order by Value
    $cars3 = array("BWM"=>"1.5","Audi"=>"2","Rolls Roys"=>"20","Mustang"=>"2.5");
    asort($cars3);
    foreach($cars3 as $com1=>$price1) {
        echo "Key:".$com1." Value:".$price1;
        echo "<br>";
    }
    echo "<br>";
    
    // Acending order by Key
    $cars4 = array("BWM"=>"1.5","Audi"=>"2","Rolls Roys"=>"20","Mustang"=>"2.5");
    ksort($cars4);
    foreach($cars4 as $com2=>$price2) {
        echo "Key:".$com2." Value:".$price2;
        echo "<br>";
    }
    echo "<br>";

    // Descending order by Value
    $cars5 = array("BWM"=>"1.5","Audi"=>"2","Rolls Roys"=>"20","Mustang"=>"2.5");
    arsort($cars5);
    foreach($cars5 as $com3=>$price3) {
        echo "Key:".$com3." Value:".$price3;
        echo "<br>";
    }
    echo "<br>";

    // Descending order by Key
    $cars6 = array("BWM"=>"1.5","Audi"=>"2","Rolls Roys"=>"20","Mustang"=>"2.5");
    krsort($cars6);
    foreach($cars6 as $com4=>$price4) {
        echo "Key:".$com4." Value:".$price4;
        echo "<br>";
    }
    echo "<br>";

?>