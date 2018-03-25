<?php

print_r($_FILES);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="<?= echo ini_get('session.upload_progress.name');?>">
		<input type="file" name="arquivo">
		<input type="submit" name="Enviar">
	</form>
</body>
</html>