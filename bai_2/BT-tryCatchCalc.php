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
        Số đầu: <input type="text" name="soDau"/><br>
        phép tính: <input list="browsers" name="browser"><br>
        <datalist id="browsers">
    		<option value="cộng">
    		<option value="trừ">
    		<option value="nhân">
    		<option value="chia">
  		</datalist>
        Số cuối: <input type="text" name="soCuoi"/>
        <input type = "submit" id = "submit" value = "calculate"/>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$phepTinh= $_POST["browser"];
    	$firstNum= $_POST["soDau"];
    	$lastNum= $_POST["soCuoi"];
        function checkNum($lastNum){
            if ($lastnum == 0){
            throw new Exception("Value must be not 0");
            }
            return true;
        }
        switch ($phepTinh) {
                case 'cộng':
                $result=$firstNum + $lastNum;
                break;
            case 'trừ':
                $result=$firstNum - $lastNum;
            break;
            case 'nhân':
                $result=$firstNum * $lastNum;
            break;
            case 'chia':
                try{
                    checkNum($lastNum);
                }
                catch(Exception $e) {
               echo 'Message: ' .$e->getMessage();
                }
                $result =$firstNum / $lastNum;
             break;
         }
        echo $result;
    }
    	
    ?>
</body>
</html>