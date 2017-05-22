<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>crud</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
	<table id="form">
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Dirección</td>
		</tr>

		<!-- recorremos el array de objetos -->
		
			<?php foreach($users as $user): ?>
		<tr>

		<!-- pintamos las propiedades de cada objeto en un td -->
				<td><?=$user->getId()?></td>
				<td><?=$user->getName()?></td>
				<td><?=$user->getSurname()?></td>
				<td><?=$user->getAddress()?></td>
				<td><a href="<?='deleteUser/'.$user->getId()?>"><input type="button" name="del" value="borrar"></a></td>
				<td><a href="<?='update/'.$user->getId()?>"><input type="button" name="act" value="actualizar"></a></td>
		</tr>
			<?php endforeach ?>
		<form action="<?='addUser/'?>" method="POST">
		<tr>
			<td></td>
			<td><input type="text" name="name"></td>
			<td><input type="text" name="surname"></td>
			<td><input type="text" name="address"></td>
			<td><input type="submit" name="enviar" value="Enviar"></td>
		</tr>
		</form>
	</table>
</body>
</html>