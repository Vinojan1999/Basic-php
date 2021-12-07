<?php

    $cars = array(
        array("BMW","i8",1.5),
        array("Rolls Roys","Ghost",20),
        array("Ford","Mustang",2),
        array("Audi","A6",1.3)
    );
    $car_num = count($cars);

    for($row=0; $row<$car_num; $row++) {
        echo "<b>Company Name: </b>","<b>".$cars[$row][0]."</b>";
        echo "<ul>";
        for($col=0; $col<3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    /////////////////////////////

    for($i=0; $i<$car_num; $i++) {
        echo $cars[$i][0]." - ".$cars[$i][1]." > Price in Cr: ".$cars[$i][2];
        echo "<br>";
    }

?>