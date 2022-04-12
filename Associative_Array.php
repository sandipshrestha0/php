<?php
//associative array (Key=>Value)
$record=array("Name"=>"Ram","Address"=>"Kathmandu","Age"=>12,"Email"=>"abc@gmail.com");

echo $record["Name"]."<br>";
echo $record["Email"]."<br>";

print_r($record);
//in associatve array we cant use for loop to show array item/ we use for each loop.

foreach($record as $k=>$v)
{
echo "$k is $v <br>";
}

?>