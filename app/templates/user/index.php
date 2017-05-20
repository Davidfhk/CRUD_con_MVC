<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Usuarios</title>
</head>
<body>
	<h1>Listado de usuarios</h1>
	<ul>
		<?php foreach ($users as $user): ?>
			<li><a href="<?='show/'.$user->getId()?>"><?= $user->getName()?></a></li>
		<?php endforeach ?>
	</ul>
</body>
</html>