<?php
session_start();
$uname="";
$pwd="";
if(isset($_POST["btnok"]))
{
    $uname = $_POST["txtv1"];
    $pwd = $_POST["txtv2"];
    if($uname=="admin" && $pwd=="admin")
    {
        $_SESSION["valid"] = true;
        header("location:welcome.php");
    }
    else{
        echo("user name and password invalid");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>Log In Page</h1>
        user <input type="text" name="txtv1" value="<?php echo $uname; ?>"> <br>
        Password <input type="text" name="txtv2" value="<?php echo $pwd; ?>"> <br>
        <input type="submit" value="ok" name="btnok"> <br>
    </form>
</body>
</html>