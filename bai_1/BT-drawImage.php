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
        Menu: <input list="Image" name="Image"><br>
        <datalist id="Image">
    		<option value="print the rectangle">
    		<option value="Print the square triangle">
    		<option value="Print isosceles triangle">
    		<option value="Exit">
  		</datalist>
        <input type = "submit" id = "submit" value ="Draw"/>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$Choice = $_POST["Image"];
    	if ($Choice == "print the rectangle") {
    		for ($i = 0; $i <3; $i++){
    			for ($j=0; $j < 6 ; $j++) { 
    				echo "*";
    			}
    			echo '<br>';
    		}
    	}
    	if ($Choice == "Print the square triangle") {
    		for ($i = 0; $i <6; $i++){
    			for ($j=0; $j < $i ; $j++) { 
    				echo "*";
    			}
    			echo '<br>';
    		}
    	}
    	if ($Choice == "Print isosceles triangle") {
    		for ($i = 5; $i > 0 ; $i--){
    			for ($j=0; $j < $i ; $j++) { 
    				echo "*";
    			}
    			echo '<br>';
    		}
    	}
    }
    ?>
</body>
</html>