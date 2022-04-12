<?php 
$b="";
$p="";
$n="";
if (isset($_GET["btnOK"]))
 {
    $n;
    $b = $_GET["txtv1"];
    $p = $_GET["txtv2"];
    $n=pow($b,$p);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>power of base</title>
</head>
<body>
    <h2>find power of base number</h2>
    <form action="powerNum.php" method="get">
        Enter base Number <input type="text" name="txtv1" value="<?php echo $b; ?>"> <br>
        Enter Power Number <input type="text" name="txtv2" value="<?php echo $p; ?>">
        <input type="submit" value="Ok" name="btnOK"> <br>
        Output: <input type="text" name="txtv3" value="<?php echo $n; ?>">

    </form>
</body>
</html>