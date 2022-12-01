<?php
    echo "We re devs <br>";
    $name = "Rabbi";
    $num1 = 10;
    $num2 = 27;
    $sum = $num1 + $num2;
    $acct_balance = 10000;
    $amount = 10000;
    if ($amount > $acct_balance) {
        echo "Insufficient Funds";
    }
    elseif ($acct_balance == $amount) {
        echo "Wallet cannot be empty";
    }
    else {
        $acct_balance = $acct_balance - $amount;
        echo "Withdrawal successful";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <h1>My name is <?php echo $name ?> </h1>
    <h1> The sum of 10 and 27 is <?php echo $sum ?></h1>
    <?php
        echo "<h3>My name is $name</h3>";
    ?>
</body>
</html>