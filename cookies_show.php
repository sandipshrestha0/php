<?php
$name="";
if(isset($_COOKIE["name"]))
{
    $name=$_COOKIE["name"];
}
else
{
    $name="Guest";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show cookies</title>
</head>
<body>
    <form action="cookies_show.php" method="get">
        Your Name from cookie is <?php echo $name; ?>
    </form>
</body>
</html>