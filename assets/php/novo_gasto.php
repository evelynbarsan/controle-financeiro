<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nova Despesa | Meu controle</title>
	</head>
	<body>
		<header>
			<div class="nav">
			<nav>
				<ul>
					<li><a href="../../public/index.php">Inicio</a></li>
					<li><a href="consulta.php">Consulta</a></li>
				</ul>
			</nav>
			</div>
		</header>
		<div id="form"> <!~~formulario de gasto~~>
			<h1>Nova Despesa</h1>
			<div class="inputs">
			<form  action="consulta.php" method="post">
				Titulo
				<input type="text" name="lugar" placeholder="Nome do estabelecimento" required />
				Descrição
				<input type="text" name="descricao" placeholder="Descreva o que comprou"/>
				Tipo de Gasto
				<select type="" name="tipo">
					<option></option>
					<option>Alimentação - Supermercado, restaurantes e afins</option>
					<option>Casa - Itens de decoração ou utilitários casa, mesa e banho</option>
					<option>Despesas mensais - Telefone, luz, água, internet e afins</option>
					<option>Educação - Faculdade, cursos, escola e afins</option>
					<option>Eletroeletrônicos - Geladeira, maquina de lavar, Tv e afins</option>
					<option>Investimentos - Tudo o que foi adquirido para gerar algum tipo de renda</option>
					<option>Obra e reforma - Itens de construção e reforma</option>
					<option>Presentes - Com pras feitas para presentear</option>
					<option>Vestuário - Roupa, Sapato, bolsa e afins</option>
					<option>Viagem - O que foi adquirido para viajar e afins</option>
					<option>Transporte - Passagens, combustivel, aplicativos e afins</option>
					<option>Outros</option>
				</select>
				Formas de Pagamento
				<input type="text" name="pagamento" placeholder="Boleto, cartão, dinheiro, débito automático, outros"/>
				Parcelas restantes
				<input type="number" name="parcelas" placeholder="" required/>
				Valor das parcelas
				<input type="number" name="valor" required/>
				<div class="botão"><button type="submit" onclick="gastos_s.php">Salvar</button></div>
			</form>
			</div>
		</div>
	</body>
</html>