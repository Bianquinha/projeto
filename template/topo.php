<html>
	<head>
		<meta charset = 'UTF-8' />
		<link rel="stylesheet" href="css/inicio.css" type="text/css"/>
	</head>
	<body class = 'fundo'>
		<div id = 'wrapper'><!-- todo o site -->
		
			<center><div id = 'header'><!-- cabeçalho -->
				<center><img src ="banner.jpg" style="position:fixed; right: 14.3%;"></center>
			</div></center><!-- fecha cabeçalho -->
			
			<center><div id = 'nav'><!-- menu -->
				<table class="tablelinks" width="50%" style="float:left">
					<tr><th><a class="link" href="index.php">INICIO</a></th>
					<th><a class="link" href="produtos.php">PRODUTOS</a></th>
				</table>
				<table class="tablelinks" width="50%" style="float:left;">
					<th><a class="link" href="sobre.php" style ="margin-left: 95px">SOBRE</a></th>
					<th>     <?php if (@$_SESSION['logado'] != 'okey'){ ?>     <a class="link" href="cadastro.php" style="font-size:15px; margin-left:35px">CADASTRAR-SE</a>     <?php } else { ?>      <a class="link" href="perfil.php" style="font-size:15px; margin-left:35px">PERFIL</a>    <?php } ?>      </th>
			</table>
			</div></center><!-- fecha menu-->
			<center><div id = 'content'><!-- conteudo -->