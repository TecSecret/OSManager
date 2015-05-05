<?php
include '../conexao/data.php';

$id =  $_GET['id'];

$sql = "DELETE FROM ordemservico WHERE Cod_Equipamento = '$id'";

$dados  = mysql_query($sql) or die(mysql_error());;

header('location: index.php');
?>