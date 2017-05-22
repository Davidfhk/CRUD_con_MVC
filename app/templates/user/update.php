<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="" method="POST">
	<table id="edit">
		<tr>
			<td colspan="4"><h2>Modifica los datos</h2></td>	
		</tr>
		<tr>
			<td></td>	
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Dirección</td>
		</tr>
		<tr>
		<!-- ponemos en cada input las variables, en la que hemos guardado lo que nos llegaba por GET -->
			<td>
				<input type="hidden" name="id" value="<?=$user->getId()?>">
			</td>
			<td>
				<input type="text" name="name" value="<?=$user->getName()?>">
			</td>
			<td>
				<input type="text" name="surname" value="<?=$user->getSurname()?>">
			</td>
			<td>
				<input type="text" name="address" value="<?=$user->getAddress()?>">
			</td>
		</tr>
		<tr>
			<td colspan="4"><input type="submit" name="act" value="Actualizar"></td>
		</tr>
	</table>
</form>
</body>
</html>