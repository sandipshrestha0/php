<?php
$servername = "localhost";
$username = "root";
$password = "";
$creat="";
if(isset($_GET["btnc1"]))
{
    $creat=$_GET["txtv1"];
}
//database connection 
$conn=mysqli_connect("localhost","root","");
//Checking connection
if(!$conn)
{
    die("error-occour");
}
else
{
    echo "connection succesfull!!";
}
//create database
$query="CREATE TABLE $creat";
if(mysqli_query($conn,$query))
{
    echo "Database created";
}
else
{
    echo "Failed to create";
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
    <form action="db_create_table.php" method="get">
        create database <br>
        <input type="text" placeholder="Database Name" name="txtv1" value="<?php echo $creat; ?>">
        <input type="submit" value="create" name="btnc1">
    </form>
</body>
</html>