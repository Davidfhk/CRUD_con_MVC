<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $user->getName()?></title>
</head>
<body>
	<h1><?= $user->getName()?></h1>
	<h2><?= $user->getSurname()?></h2>
	<p><?= $user->getAddress()?></p>
</body>
</html>