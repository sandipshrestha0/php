<?php 
if(isset($_GET["btnsetcookies"]))
{
    setcookie("name",$_GET["txtname"],time()+60,"/");
    header("location: cookies_show.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set cookies</title>
</head>
<body>
    <form action="cookies_set.php" method="get">
        Enter your Name <input type="text" name="txtname">
        <input type="submit" value="set cookies and go" name="btnsetcookies">
    </form>
</body>
</html>