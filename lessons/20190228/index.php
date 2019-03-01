<!DOCTYPE html>
<html>
  <title>Aula 28/Fev - Index</title>
  <body>
    <?php
      echo "<h2>Variáveis em PHP</h2>";
      echo "<p>Em PHP tudo que começa com $ é variável. Ex.:</p>";
      echo "<p><b>ERRO:</b> $sName cria uma variável chamada sName</p>"; //Vai dar erro
      echo '<p><b>ASPAS SIMPLES:</b> $sName cria uma variável chamada sName</p>';
      echo "<p><b>CODIFICAÇÃO ($):</b> &#x24;sName cria uma variável chamada sName</p>";

      echo "<br>";
      $sName = "PHP 11088";
      echo $sName;
      echo "<br>";
      echo "<p>Curso e turma: $sName</p>";
      echo "<p>Curso e turma: " . $sName . "</p>";

      echo "<br>";
      echo "<p><b>Nomeclatura:</b> Ao nomearmos uma variavel devemos tomar alguns cuidados</p>";
      echo "<p>O nome deve ser funcional, ou seja, indicar a função ou propósito da variável no código.</p>";
      echo "<p>Toda variável é criada com um propósito específico e para armazenar um tipo de dado pré-determinado.</p>";
      echo "<p>PHP é fracamente tipada, Nomear a váriavel com um prefixo que identifique o tipo de variável, sName -> Uma STRING</p>";

      echo "<h2>Superglobais</h2>";
      echo '<p>Variáveis especiais, o nome sempre começa com $_ seguido do nome em letras maiúsculas. Ex.: $_POST ou $_GET </p>';

      echo "<pre>";
      print_r($_GET);
      echo "</pre>";

      echo "<p></p>";
      echo "<p></p>";

      $bBol = false;
      echo $bBol;
      if ($bBol) {
        echo "true";
      } else {
        echo "false";
      }



     ?>

  </body>
</html>
