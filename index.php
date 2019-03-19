<?php
	session_start();
	session_destroy();
	//$_SESSION = array();

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Curso PHP 11088</title>
		<link rel="stylesheet" href="/php-class-11088/lib/jquery-ui/jquery-ui.css">
    <script src="/php-class-11088/js/jquery.js"></script>
    <script src="/php-class-11088/lib/jquery-ui/jquery-ui.js"></script>
	</head>

	<body>
		<h1>Curso PHP 11088</h1>

		<hr />

		<ul>
			<li>
				<a href="lessons/20190227/aula-2702.php?teste=Aula01" target="_self">Aula 01 - 27/fev</a>
			</li>
			<li>
				<a href="lessons/20190228/index.php?teste=Aula02" target="_self">Aula 02 - 28/fev</a>
			</li>
			<li>
				<a href="lessons/20190301/index.php?teste=Aula03" target="_self">Aula 03 - 01/mar</a> <br>
			</li>
			<li>
				<a href="lessons/20190304/index.php" target="_self">Estudo - 04/mar</a> <br>
			</li>
			<li>
				<a href="lessons/20190306/index.php?teste=Aula04" target="_self">Aula 04 - 06/mar</a> <br>
			</li>
			<li>
				<a href="lessons/20190310/index.php" target="_self">Estudo - 10/mar</a> <br>
			</li>
			<li>
				<a href="exercicios.php" target="_self">Exercícios</a> <br>
			</li>
			<li>
				<a href="modelo.php" target="_self">Modelo</a> <br>
			</li>
			<li>
				<a href="info.php" target="_self">Info</a> <br>
			</li>
			<li>
				<a href="samples.php" target="_self">Samples</a> <br>
			</li>
		</ul>

		<hr />

		<?php echo "Teste PHP - Funcionando";  ?>

	</body>

</html>
