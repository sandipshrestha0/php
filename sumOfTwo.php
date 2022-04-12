<?php
$v1="";
$v2="";
$r="";
if(isset($_GET["btnAdd"]))
{
    $v1=$_GET["txtv1"];
    $v2=$_GET["txtv2"];
    $r=$v1+$v2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum of two numbers</title>
</head>
<body> 
    <h1>sum of two number</h1>
<form action="sumOfTwo.php" method="get">
        value 1 <input type="text" name="txtv1" value="<?php echo $v1; ?>"><br>
        value 2 <input type="text" name="txtv2" value="<?php echo $v2; ?>"><br>
        <input type="submit" value="Add" name="btnAdd">
        Result <input type="text" name="txtresult" value="<?php echo $r;?>"> <br>
    </form>
</body>
</html>