
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Name: <input type="text" name="uname">
    T.P NUmber: <input type="text" name="pnumber">
    <input type="submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['uname'];  // If uce REQUEST => $name = $_REQUEST['uname'];
        $number = $_POST['pnumber'];
        if (empty($name)) {
            if (empty($number)) {
                echo "Oops..! You didn't enter any infomations"; 
            } else {
                echo "Oops..! You didn't put your name";
                echo "<br>";
                echo "Your mobile number: ".$number;
            }
        } else {
            if (empty($number)) {
                echo "Oops..! You didn't put your number";
                echo "<br>";
                echo "Your Name: ".$name;
            } else {
                echo "Your Name: ".$name;
                echo "<br>";
                echo "Your mobile number: ".$number;
            }
        }
    }
?>
