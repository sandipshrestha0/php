<?php
//INdex Array

$students=array("Ram","Hari","Shyam","gita","Sita");
echo $students[1]."<br>";
echo $students[3] . "<br>";

echo "<hr>All array via for loop<br>";
for($i=0;$i<count($students);$i++)
{
echo $students[$i]."<br><hr>";
}

echo "<hr>For developer debugging<br>";
print_r($students);
echo "<hr>";
?>