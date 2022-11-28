<?php 
include_once 'conn.php'
 $lugar= $_POST['lugar'];
 $descricao = $_POST['descricao'];
 $tipo = $_POST['tipo'];
 $pagamento = $_POST['pagamento'];
 $parcelas= $_POST['parcelas'];
 $valor= $_POST['valor'];

 $conn=("INSERT INTO gastos (lugar, descricao, tipo, pagamento, parcelas, valor) values(:lugar, :descricao, :tipo, :pagamento, :parcelas, :valor)");
 $conn -> execute();

?>