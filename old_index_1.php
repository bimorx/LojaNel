<?php echo "Entrando no GitHub!";?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Loja</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="justified-nav.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse">
				<div class="col-sm-4 col-sm-offset-4">
					<ul class="nav navbar-nav">
						<li><a href="#">Link 01</a></li>
						<li><a href="#">Link 02</a></li>
						<li><a href="#">Link 03</a></li>
					</ul>
				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-sm-4">
					<img src="imagens/image_holder_250x140.png" class="img-thumbnail">
				</div>
				<div class="col-sm-5">
					<a href="#" class="btn btn-primary">Quem somos</a>
					<a href="#" class="btn btn-primary">Encomendas</a>
					<a href="#" class="btn btn-primary">Minha conta</a>
				</div>
				<div class="col-sm-3">
					<div class="col-sm-12">
						Bem vindo, 
						<a href="#">Usuario X</a>
						/
						<a href="#">Sair</a>
					</div>
					<div class="col-sm-12">
						<a href="#">Carrinho</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-categorias-principal">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="menu-categorias-principal">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categoria 01<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Sub Categoria 01</a></li>
										<li><a href="#">Sub Categoria 02</a></li>
										<li><a href="#">Sub Categoria 03</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categoria 02<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Sub Categoria 01</a></li>
										<li><a href="#">Sub Categoria 02</a></li>
										<li><a href="#">Sub Categoria 03</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categoria 03<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Sub Categoria 01</a></li>
										<li><a href="#">Sub Categoria 02</a></li>
										<li><a href="#">Sub Categoria 03</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categoria 04<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Sub Categoria 01</a></li>
										<li><a href="#">Sub Categoria 02</a></li>
										<li><a href="#">Sub Categoria 03</a></li>
									</ul>
								</li>
							</ul>
							<form class="navbar-form navbar-left pull-right" role="search">
								<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>			
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1 bg-warning">
			<img src="imagens/image_holder_800x300.png" class="img-thumbnail col-md-10 col-md-offset-1">
		</div>
		<nav>
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-categorias">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="col-md-4" id="menu-categorias">
					<ul class="nav nav-pills nav-stacked">
						<li>
							<a href="#">Categoria 01</a>
							<ul>
								<li><a href="#">Sub Categoria 01</a></li>
								<li><a href="#">Sub Categoria 02</a></li>
								<li><a href="#">Sub Categoria 03</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Categoria 02</a>
							<ul>
								<li><a href="#">Sub Categoria 01</a></li>
								<li><a href="#">Sub Categoria 02</a></li>
								<li><a href="#">Sub Categoria 03</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Categoria 03</a>
							<ul>
								<li><a href="#">Sub Categoria 01</a></li>
								<li><a href="#">Sub Categoria 02</a></li>
								<li><a href="#">Sub Categoria 03</a></li>
							</ul>
						</li>
					</ul>
				</div>		
			</div>		
		</nav>		
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>