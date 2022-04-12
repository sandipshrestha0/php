<?php
$id="";
if(isset($_Get["btnDelete"]))
{
    $id=$_GET["txtId"];
    $conn = mysqli_connect("localhost","root","","sandip");
    if(!$conn)
    {
        die("Error occure")
    }
    $query="delete from tbstudent where Id='$id'";
    if(mysqli_query($conn,$query))
    {
        echo"Record deleted";
    }
    else{
        echo"Record deleted failed";
    }
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
    <form action="databas_del.php" method="get">
        <h1>student record</h1>
        <table>
            <tr>
                <td>Id</td>
                <td><input type="text" name="txtid" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnDel" value="delete"></td>
            </tr>

        </table>
    </form>
</body>
</html>