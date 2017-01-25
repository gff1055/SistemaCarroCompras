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
				<div class = "col-md-12 col-xs-12 red jumbotron cabecalhoPrincipal">Adicionar ao carrinho</div>
			</div>
			
			Para começar:<br>
			1 - Aperte o link ao lado e focalize o codigo de barras;<br>
			
			

			
			<div class = "row">
				<div class = "col-xs-12 col-md-12 atributoCadastro">
					<!-- placeholde se refere ao conteudo () dento do input -->
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Clique no link pegar" ></input>
				</div>
			</div>
			<br>
			
			
			2 - Verifique as informacoes do produto<br>
			<div class = "row">
				<div class = "col-xs-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Descricao"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-xs-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Marca"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-xs-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Preço"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-xs-12 col-md-12 atributoCadastro">
					<input type = "text" class = "form-control atributoCadastro" placeholder = "Categoria"></input>
				</div>
			</div>
			<br>				
			
			<div class = "row">
				<div class = "col-xs-12 col-md-12 atributoCadastro">
					3 - Digite a quantidade desejada: 
					<input type = "text" class = "atributoCadastro" placeholder = "Categoria"></input>
				</div>
			</div>
			<br>
					
			<div class = "row">
				<div class = "col-xs-12 col-md-12 atributoCadastro">
				
					<div class="btn-toolbar flutuaBotoesDireita" role="toolbar" aria-label="...">
						<div class="btn-group" role="group" aria-label="...">
							<button type = "button" class = "btn btn-success">
								<span class = "glyphicon glyphicon-ok" aria-hidden = "true"></span>
								ADICIONAR PRODUTO
							</button>
						</div>
						<div class="btn-group" role="group" aria-label="...">
							<div class = "col-xs-3 col-md-3 atributoCadastro">
								<button type = "button" class = "btn btn-danger">
									<span class = "glyphicon glyphicon-remove" aria-hidden = "true"></span>
									DESCARTAR PRODUTO
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br>
		</div>
			
		<!-- as bibliotecas Javascript estão por último – evita lentidão no carregamento da página. -->
		<script src = "js/jquery.js"></script>
		<script src = "js/bootstrap.js"></script>
	</body>
	
</html>