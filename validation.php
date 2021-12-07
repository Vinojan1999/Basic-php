<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {
    color: red;
}
.form {
    border-color: black;
    border-radius: 10px;
    text-align: center;
    background-color: gray;
    height: 380px;
    width: 400px;
    padding-top: 10px;
    margin-left: 35%;
}
.btn {
    background-color: blue;
    border-color: blue;
    color: white;
    border-radius: 7px;
}
</style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $msgErr = "";
    $name = $email = $sub = $msg = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['name'])) {
            $nameErr = "Name is required..!";
        } else {
            $name = test_input($_POST['name']);
        }
        if(empty($_POST['email'])) {
            $emailErr = "Email is required..!";
        } else {
            $email = test_input($_POST['email']);
        }
        if(empty($_POST['sub'])) {
            $sub = "";
        } else {
            $sub = test_input($_POST['sub']);
        }
        if(empty($_POST['msg'])) {
            $msgErr = "Put any message here.";
        } else {
            $msg = test_input($_POST['msg']);
        }
        if(empty($_POST['gender'])) {
            $genderErr = "Gender is required..!";
        } else {
            $gender = test_input($_POST['gender']);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <div class="form">
        <h1>Form Validation - PHP</h1>
        <p><span class="error"> * Required field</span></p>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            Email: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Subject: <input type="text" name="sub">
            <br><br>
            Message: <textarea name="msg"></textarea>
            <span class="error">* <?php echo $msgErr; ?></span>
            <br><br>
            Gender: 
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            <input class="btn" type="submit" name="submit" value="Submit">
        </form>
    </div>

    <?php
    echo "<h2>Your Information:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $sub;
    echo "<br>";
    echo $msg;
    ?>
</body>
