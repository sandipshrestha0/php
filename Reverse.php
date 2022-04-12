<?php
$n="";
$r="";
if(isset($_GET["btnResult"]))
{
    $n=$_GET['txtv1'];
    $x=$n;
    $rev=0;
    $rem;
    while($n>1)
     {
         $rem=$n%10;
        $rev=($rev*10)+$rem;
        $n=($n/10);
    }
    $r=$rev;
    $n=$x;
 
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
    <form action="Reverse.php" method="get">
        <h1>Display Reverse Number </h1>
        Enter  Numbers <input type="text" name="txtv1" value="<?php echo $n; ?>"> <br>
        <input type="submit" value="Result" name="btnResult"> <br>
        Reverse Number <input type="text" name="txtv2" value="<?php echo $r; ?>" >
    </form>
</body>
</html>