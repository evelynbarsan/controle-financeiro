<?php
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

    if ($result) 
     	echo "cadastrado";
    else
     	echo "não foi";
?>