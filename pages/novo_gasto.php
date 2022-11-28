<?php
	include_once '../conn.php'
?>
<!DOCTYPE html>
	<html = lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nova Despesa | Controle de Gastos</title>
	</head>
	<body>
		<div id="form"> <!~~formulario de gasto~~>
			<h1>Nova Despesa</h1>
			<div class="inputs">
			<form action="" method="post">
				<label>Titulo</label>
				<input type="text" name="local" placeholder="Nome do estabelecimento" required />
				<label>Descrição</label>
				<input type="textarea" name="descricao" placeholder="Descreva o que comprou"/>
				<label>Tipo de Gasto</label>
				<select type="" name="tipo">
					<option></option>
					<option><b>Alimentação</b> - Supermercado, restaurantes e afins</option>
					<option><b>Casa</b> - Itens de decoração ou utilitários casa, mesa e banho</option>
					<option><b>Despesas mensais</b> - Telefone, luz, água, internet e afins</option>
					<option><b>Educação</b> - Faculdade, cursos, escola e afins</option>
					<option><b>Eletroeletrônicos</b> - Geladeira, maquina de lavar, Tv e afins</option>
					<option><b>Investimentos</b> - Tudo o que foi adquirido para gerar algum tipo de renda</option>
					<option><b>Obra e reforma</b> - Itens de construção e reforma</option>
					<option><b>Presentes</b> - Com pras feitas para presentear</option>
					<option><b>Vestuário</b> - Roupa, Sapato, bolsa e afins</option>
					<option><b>Viagem</b> - O que foi adquirido para viajar e afins</option>
					<option><b>Transporte</b> - Passagens, combustivel, aplicativos e afins</option>
					<option><b>Outros</b></option>
				</select>
				<label>Formas de Pagamento</label>
				<input type="text" name="pagamento" placeholder="Boleto, cartão, dinheiro, débito automático, outros"/>
				<label>Parcelas restantes</label>
				<input type="number" name="parcelas" placeholder="" required/>
				<label>Valor das parcelas</label>
				<input type="number" name="valor" required/>
				<div class="botão"><button type="submit">Salvar</button></div>
			</form>
			</div>
		</div>
	</body>
</html>