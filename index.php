<?php

session_start();
session_destroy();

  //require_once("./utilities/menu-utilities.php");
	//require_once('./core/autoloader.php');
	require_once("./core/config.php");

$asAula =
[
	[
	   "href" => "lessons/20190227/aula-2702.php?teste=Aula01",
	   "target" => "ifrNav",
	   "caption" => "Aula 01 - 27/fev"
	],
	[
	   "href" => "lessons/20190228/index.php?teste=Aula02",
	   "target" => "ifrNav",
	   "caption" => "Aula 02 - 28/fev"
	],
	[
	   "href" => "lessons/20190301/index.php?teste=Aula03",
	   "target" => "ifrNav",
	   "caption" => "Aula 03 - 01/mar"
	],
	[
	   "href" => "lessons/20190306/index.php?teste=Aula04",
	   "target" => "ifrNav",
	   "caption" => "Aula 04 - 06/mar"
	]
];

$asEstudo =
[
	[
	   "href" => "lessons/20190304/index.php",
	   "target" => "ifrNav",
	   "caption" => "Estudo 01 - 04/mar"
	],
	[
	   "href" => "lessons/20190310/index.php",
	   "target" => "ifrNav",
	   "caption" => "Estudo 02 - 10/mar"
	],
	[
	   "href" => "lessons/20190312/index.php",
	   "target" => "ifrNav",
	   "caption" => "Estudo 03 - 12/mar"
	]
];

$asOutros =
[
	[
	   "href" => "exercicios.php",
	   "target" => "_self",
	   "caption" => "Exercícios"
	],
	[
	   "href" => "modelo.php",
	   "target" => "_self",
	   "caption" => "Modelo"
	],
	[
	   "href" => "info.php",
	   "target" => "_self",
	   "caption" => "Info"
	],
	[
	   "href" => "samples.php",
	   "target" => "_self",
	   "caption" => "Samples"
	]
];

$asDeploy =
[
	[
		"href" => "./deploy/deploy.php",
		"target" => "_self",
		"caption" => "Deploy"
	]
];

$asCRUD=
[
	[
		"href" => "./crud/crud.php",
		"target" => "_self",
		"caption" => "Cadastros"
	]
];

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
		<?php require_once("./templates/headers.js.php"); ?>
    <script>
    $(function() {
      //alert("Teste");
    });
    </script>
  </head>
  <body style="width:100%;height:100%">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand"
           href="#">
            <img src="/php-class-11088/media/images/bird.jpg"
                 alt="Logo"
                 style="width:40px;">
        </a>
        <ul class="navbar-nav">

          <li class="nav-item">
              <a class="nav-link"
                 href="/php-class-11088/index.php">Index</a>
          </li>

            <?=buildDropdownMenu( "NavItem01", "Aulas", $asAula)?>
						<?=buildDropdownMenu( "NavItem02", "Estudos", $asEstudo)?>
						<?=buildDropdownMenu( "NavItem03", "Outros", $asOutros)?>
						<?=buildDropdownMenu( "NavItem03", "Deploy", $asDeploy)?>
						<?=buildDropdownMenu( "NavItem04", "Cadastros", $asCRUD)?>

        </ul>
    </nav>
    <div style="position:absolute;top:60px;width:100%;height:90%;background-color:#000;padding:10px;">
        <iframe id="ifrNav" name="ifrNav" style="width:100%;height:100%;background-color:#aaa">
					<h1>Página Inicial</h1>
				</iframe>
    </div>
  </body>
</html>
