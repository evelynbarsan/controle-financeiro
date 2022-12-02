<?php
//conexão
	$bd_servername = 'localhost';
	$bd_user='root';
	$bd_password = 'Evelyn@19';
	$bd_name = 'controle';
	$con = mysqli_connect($bd_servername, $bd_user, $bd_password, $bd_name) or die(mysqli_errno());
//Gravar no bd
	$lugar=$_POST["lugar"];
    $descricao = $_POST["descricao"];
    $tipo = $_POST["tipo"];
    $pagamento = $_POST["pagamento"];
    $parcelas= $_POST["parcelas"];
    $valor= $_POST["valor"];
    $sql='INSERT INTO gastos (lugar, descricao, tipo, pagamento, parcelas, valor) VALUES( "'.$lugar.'","'.$descricao.'","'.$tipo.'","'.$pagamento.'","'.$parcelas.'","'.$valor.'")';

    $result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Meus Gastos | Controle de Gastos</title>
	</head>
	<body>
		<header>
			<div class="nav">
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="novo_gasto.php">Novo</a></li>
			</nav>
			</div>
		</header>
		<h1> Meus Gastos</h1>
		<?php
		//mostrar DB
		$result_gastos="SELECT * FROM gastos";
		$apresentacao_de_gst = mysqli_query($con, $result_gastos);
		while ($row_gastos = mysqli_fetch_assoc($apresentacao_de_gst)) 
		{
			echo "Titulo:" . $row_gastos['lugar'] . "<br>";
			echo "Descrição da compra:" . $row_gastos['descricao'] . "<br>";
			echo "classificação:" . $row_gastos ['tipo'] . "<br>" ;
			echo "Metodo de pagamento" . $row_gastos['pagamento'] . "<br>" ;
			echo "Parcelas que faltam:" . $row_gastos['parcelas'] . "<br>" ;
			echo "Valor da parcela:" . $row_gastos['valor'] . "<br>" ;
			echo "Valor total:" . ($soma = $row_gastos['parcelas']* $row_gastos['valor']) . "<br><br>";
		}
		?>
	</body>
</html>