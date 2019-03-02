<!DOCTYPE html>
<html>
	<head>
		<title>Curso PHP 11088</title>
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
				<a href="exercicios.php" target="_self">Exercícios</a> <br>
			</li>
		</ul>

		<hr />

		<?php echo "Teste PHP - Funcionando";  ?>

		<?php
			echo "<hr />";

			$x = "AAA";

			echo "<h4>aaaa</h4>";
			echo "
				<table>
					<tr>
						<th>Coluna 1</th>
						<th>Coluna 2</th>
						<th>Coluna 3</th>
					</tr>
				</table>
			";

			echo $x . $x . " $x";

			echo "<hr />";

		?>

		<p>This is a paragraph.</p>

	</body>

</html>
