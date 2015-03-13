<?php
$arrPaginas = array("inicial", "contato");
$arrParametros = $_GET;
$pagina = in_array($arrParametros["p"],$arrPaginas) ? $arrParametros["p"] : "inicial";
?>
<html>
<head>
	
</head>
<body>
	<!-- Menu da Index -->
	<div id="index_menu">
		
	</div>
	<!-- Conteúdo da Index -->
	<div id="index_conteudo">
		
	</div>
	<!-- Rodapé da Index -->
	<div id="index_rodape">
		
	</div>
</body>
</html>