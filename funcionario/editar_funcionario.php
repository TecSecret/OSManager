<?php
    $nivel_autorizado = "1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>
<?php
    include '../includes/get_sql_value_string.php';
    if(isset($_POST['funcionario'])){
        include '../conexao/data.php';

        $sql  =  sprintf("UPDATE funcionario SET nome=%s, apelido=%s, cargo=%s, setor=%s, cpf=%s, rg=%s, ctps=%s, data_nasc=%s, estado_civil=%s, numero_filhos=%s, tipo_sanguineo=%s, email=%s, fone_com=%s, fone_res=%s, celular=%s, escolaridade=%s, situacao=%s, ano=%s, endereco=%s, bairro=%s, cidade=%s, estado=%s, cep=%s, login=%s, senha=%s, nivel=%s WHERE codigo=%s",
                        GetSQLValueString($_POST['nome'], "text"),
                        GetSQLValueString($_POST['apelido'], "text"),
                        GetSQLValueString($_POST['cargo'], "text"),
                        GetSQLValueString($_POST['setor'], "text"),
                        GetSQLValueString($_POST['CPF'], "text"),
                        GetSQLValueString($_POST['RG'], "text"),
                        GetSQLValueString($_POST['CTPS'], "text"),
                        GetSQLValueString($_POST['data_nasc'], "text"),
                        GetSQLValueString($_POST['estado_civil'], "text"),
                        GetSQLValueString($_POST['num_filho'], "text"),
                        GetSQLValueString($_POST['tipo_sang'], "text"),
                        GetSQLValueString($_POST['email'], "text"),
                        GetSQLValueString($_POST['fone_comercial'], "text"),
                        GetSQLValueString($_POST['fone_residencial'], "text"),
                        GetSQLValueString($_POST['celular'], "text"),
                        GetSQLValueString($_POST['escolaridade'], "text"),
                        GetSQLValueString($_POST['situacao'], "text"),
                        GetSQLValueString($_POST['ano'], "text"),
                        GetSQLValueString($_POST['endereco'], "text"),
                        GetSQLValueString($_POST['bairro'], "text"),
                        GetSQLValueString($_POST['cidade'], "text"),
                        GetSQLValueString($_POST['estado'], "text"),
                        GetSQLValueString($_POST['CEP'], "text"),
                        GetSQLValueString($_POST['login'], "text"),
                        GetSQLValueString($_POST['senha'], "text"),
                        GetSQLValueString($_POST['nivel'], "text"),
                        GetSQLValueString($_POST['id'], "int"));

        $result = mysql_query($sql, $data)  or die(mysql_error());
        mysql_close($data);
        header("location: index.php");
    }
?>
<?php
if(empty($_POST['funcionario'])){

    include '../conexao/data.php';

    $id =  $_GET['id'];

    $sql = "SELECT * FROM funcionario WHERE codigo = '$id'";

    $dados  = mysql_query($sql);

    $funcionario = mysql_fetch_array($dados) or die(mysql_error());

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
                    Editar Funcionário
                </h1>
                <?php include 'includes/form_alterar.php';?>
            </div>
        </div>
    </div>
    <?php include '../includes/rodape.php';?>

</body>
