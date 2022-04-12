<?php
$n=$fac="";
if (isset($_GET["btnFact"]))
 {
     $n=$_GET["txtv1"];
     $i;
     $f=1;
     for($i=1; $i<=$n; $i++)
     {
         $f=$f*$i;
     }
     $fac=$f;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial of numbers</title>
</head>
<body>
    <h1>factorial no</h1>
    <form action="factorial.php" method="get">
        Enter a number <input type="text" name="txtv1" value="<?php echo $n; ?>"><br>
        <input type="submit" value="factorial" name="btnFact"> <br>
        Result <input type="text"  value="<?php echo $fac; ?>">
    </form>
</body>
</html>