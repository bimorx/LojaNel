<?php
$nbCategorias = 4;
$nbSubCategorias = 3;
$nbProdutos = 8;
$nbOptFiltros = 6;
$nbItemFiltros = 4;
?>
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
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".menu-usuario">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="imagens/image_holder_250x140.png" width="185" height="130" class="img-responsive">
			</div>
			<div class="collapse navbar-collapse menu-usuario" id="menu-usuario">
				<ul class="nav navbar-nav v-margin-1">
					<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Quem somos</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
				</ul>
				<form class="navbar-form navbar-left v-margin-1" role="search">
					<div class="input-group">
						<input class="form-control input-lg" placeholder="Buscar produtos"/>
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right v-margin-1">
					<li><a data-toggle="collapse" href="#login_cadastro" aria-controls="login_cadastro">
						<span class="glyphicon glyphicon-user"></span> Minha conta</a>
					</li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Meus Pedidos</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- 
		
		-->
	
	<div class="container">
		<div class="collapse col-sm-4" id="login_cadastro">
							<form>
								<label class="control-label col-sm-4">
									Usuario
								</label>
								<input class="form-control" />
								<label class="control-label col-sm-4">
									Senha
								</label>
								<input class="form-control" />
							</form>
						</div>
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu-usuario" id="menu-departamento">
							<ul class="nav navbar-nav">
								<?php
								for($i=0;$i<$nbCategorias;$i++){
								?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categoria <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<?php 
											for($j=0;$j<$nbSubCategorias;$j++){
										?>
										<li><a href="#">Sub Categoria</a></li>
										<?php }?>
									</ul>
								</li>
								<?php }?>
							</ul>
							<ul class="nav navbar-nav pull-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										Todas as Categorias <span class="caret"></span>
									</a>
									<ul class="dropdown-menu" role="menu">
										<?php 
											for($j=0;$j<$nbCategorias;$j++){
										?>
										<li><a href="#">Categoria</a></li>
										<?php }?>
									</ul>
								</li>
							</ul>
							<!--
							<form class="navbar-form navbar-left pull-right" role="search">
								<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar produto">
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
							</form>
							-->
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  	<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			  	</ol>
			  <!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
					<div class="item active">
			 			<img src="imagens/image_holder_800x300.png" class="img-responsive col-md-12"/>
				  		<div class="carousel-caption">
				    		Imagem de teste 01
				  		</div>
					</div>
					<div class="item">
					  	<img src="imagens/image_holder_800x300.png" class="img-responsive col-md-12"/>
					  	<div class="carousel-caption">
					  		Imagem de teste 02
					  	</div>
					</div>
					<div class="item">
					  	<img src="imagens/image_holder_800x300.png" class="img-responsive col-md-12"/>
					  	<div class="carousel-caption">
					  		Imagem de teste 02
					  	</div>
					</div>
					<div class="item">
					  	<img src="imagens/image_holder_800x300.png" class="img-responsive col-md-12"/>
					  	<div class="carousel-caption">
					  		Imagem de teste 03
					  	</div>
					</div>
			  	</div>
			
			  <!-- Controls -->
			  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>
	</div>
		<hr/>
		<div class="row">
			<div class="col-md-3 col-md-pull-1">
				<?php for($i=0;$i<$nbOptFiltros;$i++){?>
				<div class="panel panel-default panel-escuro borda-quadrada">
					<div class="panel-heading borda-quadrada" role="tab" id="<?php echo "hopt".$i?>">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="<?php echo "#opt".$i?>" aria-expanded="false" aria-controls="<?php echo "hopt".$i?>">
								Opção de Filtragem
								<span class="pull-right glyphicon glyphicon-pushpin"></span>
							</a>
						</h4>
					</div>
					<div id="<?php echo "opt".$i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo "hopt".$i?>">
						<div class="panel-body borda-quadrada">
							<ul class="ul-menu-lateral">
								<?php for($j=0;$j<$nbItemFiltros;$j++){?>
								<li>
									<span class="glyphicon glyphicon-<?php echo $j == floor($nbItemFiltros/4) ? "check" : "unchecked";?>"></span>
									<a href="#"> Item de filtragem</a>
									<span class="pull-right glyphicon glyphicon-tag"></span>									
								</li>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
			<div class="col-md-9 col-md-pull-1">
				<?php for($i=0;$i<$nbProdutos;$i++){?>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="imagens/etiqueta.png" alt="Produto">
						<div class="caption">
							<h3>Produto </h3>
							<p>	Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
								Donec id elit non mi porta gravida at eget metus. 
								Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>