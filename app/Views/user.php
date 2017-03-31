<!DOCTYPE html>
<html>
<head>
	<title>daftar</title>
</head>
<body>
<?php foreach ($data['users'] as $user) {
	echo $user['nama'].'<br>';
} ?>
</body>
</html>