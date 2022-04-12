<?php 
$t="";
$conn=mysqli_connect("localhost","root","","sandip");
if(!$conn)
{
    die("Error-occour");
}
 $query="select * from tbstudent";
 $result=mysqli_query($conn,$query);
 $t="<table border=1>
 <tr>
 <td>Id</td>
 <td>Name</td>
 <td>Address</td>
 <td>Email</td>
 <td>Gender</td>
 <td>Class</td>
 <td>Fees</td>
 </tr>"

 while ($row=mysqli_fet_assoc($result))
 {
     $t.=$t."<tr>
     <td>$row[Id]</td>
 <td>$row[Name]</td>
 <td>$row[Address]</td>
 <td>$row[Email]</td>
 <td>$row[Gender]</td>
 <td>$row[Class]</td>
 <td>$row[Fees]</td>
 </tr>"

 }
$t.="</table>";
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
    <form action="db_showall.php" method="get">
    <h1>
        student record 
    </h1>
    <?php echo $t; ?>
    </form>
</body>
</html>