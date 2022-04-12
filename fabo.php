<?php
$n="";

if(isset($_GET["btnf"]))
{
    $n=$_GET["txtv1"];
    $a=0;
    $b=1;
    $c;
echo $a.",", $b.",";
for($i=0; $i<$n; $i++)
{

    $c=$a+$b;
    echo $c.",";
    $a=$b;
    $b=$c;
    echo "";

}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fabbonacci</title>
</head>
<body>
    <h1>Fabonacci</h1>
    <form action="fabo.php" method="get">
        Enter Numbers <input type="text" name="txtv1" value="<?php echo $n; ?>"><br>
        <input type="submit" value="Fabonacci" name="btnf"><br>
    </form>
</body>
</html>