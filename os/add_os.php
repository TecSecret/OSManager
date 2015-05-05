<?php
if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
    {
        $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

        $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

        switch ($theType) {
            case "text":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "long":
            case "int":
                $theValue = ($theValue != "") ? intval($theValue) : "NULL";
                break;
            case "double":
                $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
                break;
            case "date":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "defined":
                $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }
}

if(isset($_POST['os'])){
    include '../conexao/data.php';
    $sql  = sprintf("INSERT INTO ordemservico (Funcionario, Data_Entrada, Hora_Entrada, Cliente, Equipamento, Modelo, Marca, Patrimonio, Serie, Setor, Garantia, Problemacliente) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
        GetSQLValueString($_POST['Funcionario'], "text"),
        GetSQLValueString($_POST['Data_Entrada'], "text"),
        GetSQLValueString($_POST['Hora_Entrada'], "text"),
        GetSQLValueString($_POST['Cliente'], "text"),
        GetSQLValueString($_POST['Equipamento'], "text"),
        GetSQLValueString($_POST['Modelo'], "text"),
        GetSQLValueString($_POST['Marca'], "text"),
        GetSQLValueString($_POST['Patrimonio'], "text"),
        GetSQLValueString($_POST['serie'], "text"),
        GetSQLValueString($_POST['setor'], "text"),
        GetSQLValueString($_POST['Garantia'], "text"),
        GetSQLValueString($_POST['Problemacliente'], "text"));
    $result = mysql_query($sql,$data)  or die(mysql_error());
    mysql_close($data);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php include '../includes/head.php';?>
<?php include '../includes/bootstrap.php';?>
<body>

    <?php include '../includes/navbar_menu.php';?>
    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php include '../includes/navbar_lateral.php';?>
            <div class="col-sm-9 col-md-10 main">
                <h1 class="page-header">
                    Inserir Funcionário
                </h1>
                <?php include 'includes/form_cadastro.php';?>
            </div>
        </div>
    </div>
    <?php include '../includes/rodape.php';?>

</body>
