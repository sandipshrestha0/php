<?php
$v1 = "";
$v2 ="";
$v3 ="";
$r = "";
if (isset($_GET["btn"]))
 {
    $v1 = $_GET["txtv1"];
    $v2 = $_GET["txtv2"];
    $v3 = $_GET["txtv3"];
    $r = ($v1*$v2*$v3)/100;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple interest</title>
</head>
<body>
    <h2>Find simple interest </h2>
    <form action="simpleInterest.php" method="get">
        Principle <input type="text" name="txtv1" value="<?php echo $v1;?>"> <br>
        Time <input type="text" name="txtv2" value="<?php echo $v2;?>"> <br>
        Rate <input type="text" name="txtv3" value="<?php echo $v3;?>"> <br>
        
        <input type="submit" value="Simple Interest" name="btn" >
        Result <input type="text" name="txtresult" value = "<?php echo $r ?>">
    </form>
</body>
</html>
