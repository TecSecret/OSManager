<?php
    $nivel_autorizado = "0,1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>

<?php
    include '../includes/get_sql_value_string.php';

    if(isset($_POST['os'])){
        include '../conexao/data.php';

        $sql  =  sprintf("UPDATE ordemservico SET Funcionario=%s, Data_Entrada=%s, Hora_Entrada=%s, Cliente=%s, Equipamento=%s, Modelo=%s, Marca=%s, Patrimonio=%s, Serie=%s, Setor=%s, Garantia=%s, Problemacliente=%s WHERE Cod_Equipamento=%s",
                        GetSQLValueString($_POST['tecnico'], "text"),
                        GetSQLValueString($_POST['data_entrada'], "text"),
                        GetSQLValueString($_POST['hora_entrada'], "text"),
                        GetSQLValueString($_POST['cliente'], "text"),
                        GetSQLValueString($_POST['equipamento'], "text"),
                        GetSQLValueString($_POST['modelo'], "text"),
                        GetSQLValueString($_POST['marca'], "text"),
                        GetSQLValueString($_POST['num_patrimonio'], "text"),
                        GetSQLValueString($_POST['num_serie'], "text"),
                        GetSQLValueString($_POST['setor'], "text"),
                        GetSQLValueString($_POST['garantia'], "text"),
                        GetSQLValueString($_POST['diagnostico'], "text"),
                        GetSQLValueString($_POST['id'], "int"));

        $result = mysql_query($sql, $data)  or die(mysql_error());
        mysql_close($data);
        header("location: index.php");
    }
?>
<?php
if(empty($_POST['os'])){

    include '../conexao/data.php';

    $id =  $_GET['id'];
    $sql = "SELECT * FROM ordemservico WHERE Cod_Equipamento = '$id'";
    $dados  = mysql_query($sql);
    $ordem_servico = mysql_fetch_array($dados) or die(mysql_error());

    $sql = "SELECT * FROM cliente WHERE nome = '".$ordem_servico["Cliente"]."'";
    $dados = mysql_query($sql);
    $cliente = mysql_fetch_array($dados) or die(mysql_error());
    mysql_close($data);
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
                    Editar Ordem de Serviço
                </h1>
                <?php include 'includes/form_alterar.php';?>
            </div>
        </div>
    </div>
    <?php include '../includes/rodape.php';?>

</body>
