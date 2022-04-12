<?php
$n="";
$d="";
if(isset($_GET["btnshow"]))
{
	$n=$_GET["txtDayNum"];
	switch($n)
	{
		case 1:
		$d="sunday";
		break;
		case 2:
		$d="Monday";
		break;
		case 3:
		$d="Tuesday";
		break;
		case 4:
		$d="Wednesday";
		break;
		case 5:
		$d= "Thursday";
		break;
		case 6:
		$d ="Friday";
		break;
		case 7:
		$d = "Saturday";
		break;
		default:
		$d ="Invalid";
	}
}
	?>
	
<html>
<head><title>Input day no and display weekday name</title></head>
<body>
<h1>Dispaly Week Days </h1>
	<form action="weekDay.php" method="get">
		Enter Day Number <input type="text" name="txtDayNum" value="<?php echo $n; ?>"><br>
		<input type="submit" value="weeks" name="btnshow" ><br>
		Week day Name <input type="text" name="txtDayName" value="<?php echo $d; ?>"><br>
		
	</form>
</body>
</html>
