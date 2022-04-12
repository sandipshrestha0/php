<?php
$id=$name=$address=$phone=$email=$gender=$class=$fees="";
if(isset($_GET["btnsave"]))
{
    $id=$_GET["txtid"];
    $name=$_GET["txtname"];
    $address=$_GET["txtaddress"];
    $phone=$_GET["txtphone"];
    $email=$_GET["txtemail"];
    $gender=$_GET["txtgender"];
    $class=$_GET["txtclass"];
    $fees =$_GET["txtfees"];
}
// database connection aborted
$conn=mysqli_connect("localhost","root","","sandip");
if(!$conn)
{
    die("Error-occour");
}
$query="insert into tbstudent1(Id,Name,Address,Phone,Email,Gender,Class,Fees)
values('NULL','$name','$address','$phone','$email','$gender','$class','$fees')";
if(mysqli_query($conn,$query))
{
    echo"Record save";
}
else{
    echo"Record Save Failed";
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
      <h1>MySql with php</h1>
      <form action="" method="get">
          <table>
              <tr>
                  <td>Id</td>
                  <td><input type="text" name="txtid" value="<?php echo $id; ?>"></td>
              </tr>
              <tr>
                <td>Name </td>
                <td><input type="text" name="txtname" value="<?php echo $name; ?>"></td>
              </tr>
              <tr>
                  <td>Address</td>
                  <td><input type="text" name="txtaddress" value="<?php echo $address; ?>"></td>
              </tr>
              <tr>
                  <td>Phone</td>
                  <td><input type="text" name="txtphone" value="<?php echo $phone; ?>"></td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td><input type="text" name="txtemail" value="<?php echo $email; ?>"></td>
              </tr>
              <tr>
                  <td>Gender</td>
                  <td><input type="text" name="txtgender" value="<?php echo $gender;?>"></td>
              </tr>
              <tr>
                  <td>Class</td>
                  <td><input type="text" name="txtclass" value="<?php echo $class; ?>"></td>
              </tr>
              <tr>
                  <td>Fees</td>
                  <td><input type="text" name="txtfees" value="<?php echo $fees; ?>"></td>
              </tr>
              <tr>
                  <td><input type="submit"  value="save" name="btnsave"></td>
              </tr>
          </table>
      </form>
</body>
</html>