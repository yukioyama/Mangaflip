<?php
	include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<button type="submit" name="submit">Upload</button>
</form>
</body>
</html>

<?php
	include_once 'footer.php';
?>