<?php
$n=$r="";
if(isset($_GET["btnresult"]))
{
    $n=$_GET["txtv1"];
    $x=$n;
    $rem;
    $rev=0;
    while($n>1)
    {
        $rem=$n%10;
        $rev=($rev*10)+$rem;
        $n=$n/10;
    }
    echo $rev;
    if($rev==$x)
    {
        $r="its palindrom";
    }
    else
    {
        $r="not a palindrom";
    }
    $n=$x;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrom number</title>
</head>
<body>
    <h1>display given number is palindrom or not </h1>
<form action="palindrome.php" method="get" >
<table>
        <tr>
            <td>
                Enter  numbers :
            </td>
            <td>
                <input type="text" name="txtv1" value="<?php echo $n; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnresult" value="Result">
            </td>
        </tr>
        <tr>
            <td>Result :</td>
            <td>
                <input type="text" name="txtv2" value="<?php echo $r; ?>">
            </td>
        </tr>
    </table>
</form>
</body>
</html>