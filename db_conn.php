<?php
$conn=mysqli_connect("localhost","root","","sandip");
if(!$conn)
{
    die("Error-occour");
}
else
{
   echo "Mysql database connected <br> <(-_-)>";
}
?>