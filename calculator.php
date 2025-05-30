<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="numberOne" placeholder="Number one"><br>
        <input class="radio" type="radio" id="add" name="operator" checked value="+">
        <label class="labelRadio" for="add">+</label>
        <input class="radio" type="radio" id="sub" name="operator" value="-">
        <label class="labelRadio" for="sub">-</label>
        <input class="radio" type="radio" id="pow" name="operator" value="*">
        <label class="labelRadio" for="pow">*</label>
        <input class="radio" type="radio" id="div" name="operator" value="/">
        <label class="labelRadio" for="div">/</label>
        <br>
        <input type="text" name="numberTwo" placeholder="Number two"><br>
        <button>Calculate</button>
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num01 = filter_input(INPUT_POST, "numberOne", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "numberTwo", FILTER_SANITIZE_NUMBER_FLOAT);
        $operate = htmlspecialchars($_POST["operator"]);

        $errors = false;

        if (empty($num01) || empty($num02) || empty($operate)) {
           echo"<p>Fill in all flieds</p>";
           $errors = true;
        }

        if(!is_numeric($num01) || !is_numeric($num02)){
           echo"<p>Variables should be numbers</p>";            
            $errors = true;
        }

        if(!$errors){
            $value;
            switch ($operate) {
                case '+':
                    $value = $num01 + $num02;
                    break;
                case '-':
                    $value = $num01 - $num02;
                    break;
                case '*':
                    $value = $num01 * $num02;
                    break;
                case '/':
                    $value = $num01 / $num02;
                    break;
                default:
                    echo"<p>Everythting is wrong!!!</p>";
                    break;
            }
                    echo"<p>Result = {$value}</p>";
        }
    }
?>