<!DOCTYPE html>
<html>

<head>
    <title>PHP page</title>
</head>

<body>

    <?php

    echo strlen("Hello world");   // Output 11
    echo "<br>";

    echo str_word_count("Hello Vinojan Abhimanyu");    // Output 3
    echo "<br>";

    echo strrev("Hello World");    // Output: dlroW olleH
    echo "<br>";

    echo strpos("Hi hello Vino", "Vino");  // Output 9
    echo "<br>";

    echo str_replace("World", "Dolly", "Hello World");       // Hello Dolly
    echo "<br>";
    
    $x = 5985;
    var_dump(is_int($x));      // bool(true)
    echo "<br>";
    $x = 59.85;
    var_dump(is_int($x));      // bool(false)
    echo "<br>";
    $x = 10.365;
    var_dump(is_float($x));     // bool(true)
    echo "<br>";
    $x = 1.9e411;
    var_dump($x);        // float(INF)
    echo "<br>";
    $x = acos(8);
    var_dump($x);      // float(NAN)
    echo "<br>";
    $x = 5985;
    var_dump(is_numeric($x));     // bool(true)
    echo "<br>";

    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;         // Output: 23465
    echo "<br>";

    echo(pi()); // returns 3.1415926535898
    echo "<br>";

    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo "<br>";
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
    echo "<br>";

    echo(abs(-6.7));  // returns 6.7
    echo "<br>";

    echo(sqrt(64));  // returns 8
    echo "<br>";

    echo(round(0.60));  // returns 1
    echo "<br>";
    echo(round(0.49));  // returns 0
    echo "<br>";

    // define(name, value, case-insensitive)
    // name: Specifies the name of the constant
    // value: Specifies the value of the constant
    // case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
    define("str","Vinojan");
    echo "My name is : ".str;   //  Output: "My name is : Vinojan"
    echo "<br>";

    ?>

</body>
</html>