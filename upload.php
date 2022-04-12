<?php

if(isset($_POST["btnUpload"]))
{
if(move_uploaded_file($_FILES["uplfile"]["tmp_name"],
'uploads\\'.$_FILES["uplfile"]["name"]))
{
echo "File uploaded";

 }
else
{
echo "file upload fail";
}
}

?>
<html>
<head>
<title>File upload in PHP</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
Select file <input type="file" name="uplfile"><br> <br>
<input type="submit" value="Upload" name="btnUpload">

</form>
</body>
</html>