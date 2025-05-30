<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio buttons</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="Revolut">Revolut<br>        
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    //radio buttons
    if(isset($_POST["confirm"])){
        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];                    
        } 

        switch ($credit_card) {
            case "Visa":
                echo"You selected Visa";
                break;
            case "Mastercard":
                echo"You selected Mastercard";
                break;
            case "Revolut":
                echo"You selected Revolut";
                break;
            default: echo "Select your payment card";
        }                  
        
    }
    
?>