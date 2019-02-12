<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form method="post">
        Product Description: <input type="text" name="description"/>
        List Price: <input type="text" name="price"/>
        Discount Percent: <input type="text" name="discount"/>
        <input type = "submit" id = "submit" value = "calculate"/>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $money = $_POST["price"];
        $percent = $_POST["discount"];
        $bill = $money -($money * $percent *0.01);
        echo $bill; 
    }
    ?>
</body>
</html>