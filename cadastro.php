<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<!-- faz o site ocupar todo o espaço disponível na janela, tanto em celulares, como em tablets ou em PC’s. -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel = "stylesheet" href = "css/style.css" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		
		<title>Adicionar ao carrinho</title>
		
	</head>
	<body class = "fundo">
	
	
		<div class = "container">
			<div class = "row">
				<div class = "col-md-12 col-sm-12 red jumbotron cabecalhoPrincipal">Adicionar ao carrinho</div>
			</div>
			
			<div class = "row">
					
				<div class = "col-sm-12 col-md-12 atributoCadastro">
					<!-- placeholde se refere ao conteudo () dento do input -->
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Codigo" ></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-sm-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Descricao"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-sm-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Marca"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-sm-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Preço"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-sm-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Categoria"></input>
				</div>
			</div>
				
			<div class = "row">
				<div class = "col-sm-12 col-md-12 atributoCadastro">
					<button> Cadastrar </button>
					<button> Cancelar </button>
				</div>
			</div>	
			
		</div>
			
		<!-- as bibliotecas Javascript estão por último – evita lentidão no carregamento da página. -->
		<script src = "js/jquery.js"></script>
		<script src = "js/bootstrap.js"></script>
	</body>
	
</html>