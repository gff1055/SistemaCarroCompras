<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<!-- faz o site ocupar todo o espaço disponível na janela, tanto em celulares, como em tablets ou em PC’s. -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel = "stylesheet" href = "css/styleAoCarrinho.css" />
		<link rel = "stylesheet" href = "css/style.css" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		
		<title>Adicionar ao carrinho</title>
		
	</head>
	<body class = "fundo">
	
	
		<div class = "container">
			<div class = "row">
				<div class = "col-md-12 col-sm-12 red jumbotron cabecalhoPrincipal">Adicionar ao carrinho</div>
			</div>
			<form action = "#" method = "post">
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
					Para começar:<br>
					1 - Aperte o botão escanear e aponte para o código de barras:<br>
					<button type = "button" class = "btn btn-primary">
								<a href = http://zxing.appspot.com/scan?ret=http://www.seu-dominio.com.br/seu-arquivo.php?codigo={CODE} class = "btnEscanearProduto"><span class = "glyphicon glyphicon-barcode" aria-hidden = "true"></span>
								Escanear produto</a>
					</button>
				</div>
				
			</div>
			</form>
			<br>
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
				
					<label for = "idFormCodigo" class = "labelForm">Código:</label>
					<input type = "text" class = "form-control" id = "idFormCodigo"></input>
				</div>
			</div>
			<br>
			
			
			2 - Verifique as informacoes do produto
			<br>
			<br>
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
					<label for = "idFormDescricao" class = "labelForm">Descrição</label>
					<input type = "text" class = "form-control" id = "idFormDescricao"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
					<label for = "idFormMarca" class = "labelForm">Marca</label>
					<input type = "text" class = "form-control" id = "idFormMarca"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
					<label for = "idFormPreco" class = "labelForm">Preço</label>
					<input type = "text" class = "form-control" id = "idFormPreco"></input>
				</div>
			</div>
		
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
					<label for = "idFormPreco" class = "labelForm">Categoria</label>
					<input type = "text" class = "form-control" id = "idFormCategoria"></input>
				</div>
			</div>
			<br>				
			
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
					3 - Digite a quantidade desejada: 
					<input type = "number"></input>
				</div>
			</div>
			<br>
					
			<div class = "row">
				<div class = "col-sm-12 col-md-12">
				
					<div class="btn-toolbar flutuaBotoesDireita" role="toolbar" aria-label="...">
						<div class="btn-group" role="group" aria-label="...">
							<button type = "button" class = "btn btn-success">
								<span class = "glyphicon glyphicon-ok" aria-hidden = "true"></span><br>
								Adicionar<BR>produto
							</button>
						</div>
						<div class="btn-group" role="group" aria-label="...">
							<div class = "col-sm-3 col-md-3">
								<button type = "button" class = "btn btn-danger">
									<span class = "glyphicon glyphicon-remove" aria-hidden = "true"></span><br>
									Escanear<br>produto
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