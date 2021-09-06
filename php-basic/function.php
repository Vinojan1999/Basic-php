<?php

// Suntax
    // function functionName() {
    //     code to be executed;
    // }

    function writeMsg() {
        echo "Hello Functions!";
    }
    // for($i=0; $i<5; $i++) {
    //     writeMsg();
    // }
    writeMsg(); // call the function
    echo "<br>";

    ////////////////////////////

    function family($fname, $year) {
        echo "Family member name is: $fname --- She Born in: $year <br>";
    }
    family("Jenny", "1999");
    family("Jakku", "2000");
    family("Jaksha", "1998");
    family("Kuddy", "2021");

    /////////////////////////

    function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);

    ///////////////////

    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " . sum(5,10) . "<br>";
    echo "7 + 13 = " . sum(7,13) . "<br>";
    echo "2 + 4 = " . sum(2,4). "<br>";

    function addNumbers(float $a, float $b) : float {
        return $a + $b;
    }
    echo addNumbers(1.2, 5.2);

?>