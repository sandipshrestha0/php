<?php 
$n="";
$r="";
if (isset($_GET["btnCheck"]))
 {
    $n=$_GET["txtv1"];
    $count=0;
    $i;
    for($i=1; $i<=$n; $i++)
    {
        if($n%$i==0)
        {
            $count++;
        }
    }
    if($count <= 2)
        {
            $r = $n." is prime number";
        }
    else
        {
            $r = $n." is not a prime number";
        }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    <h1>prime or not</h1>
    <form action="prime.php" method="get">
        Enter number <input type="text" name="txtv1" value="<?php echo $n; ?>">
        <input type="submit" value="check" name="btnCheck">
        <br> Result <input type="text" name="txtv2" value ="<?php echo $r; ?>">

    </form>
</body>
</html>