<?php
 echo "teste";
?>

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

<?php
header('Location: http://'.$_SERVER['HTTP_HOST'].'/php-class-11088/');
exit;
?>

<!--?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	//header('Location: '.$uri.'/dashboard/');
	header('Location: '.$uri.'/php-class-11088/');
	exit;
?-->
