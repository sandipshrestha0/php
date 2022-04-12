<?php
$d="";
$r="";
if (isset($_GET["btn"])) 
{   
    $s=0;
    $rem;
    $d=$_GET["textv1"];
    $n=$d;
    while($d>0)
    {
        $rem=$d%10;
        $s=$s+$rem;
        $d=$d/10;
    }
    $r=$s;
    $d=$n;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum of digits</title>
</head>
<body>
    <h2>sum of digits </h2>
    <form action="sumOfDigits.php" method="get">
        Enter Digits <input type="text" name="textv1" value="<?php echo $d; ?>"> <br>
        <input type="submit" value="Result" name="btn"> <br>
        sum Of digits <input type="text" name="textv2" value ="<?php echo $r; ?>">
    </form>
</body>
</html>