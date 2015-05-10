<?php
    $nivel_autorizado = "1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>
<?php
    include '../includes/get_sql_value_string.php';
    if(isset($_POST['funcionario'])){
        include '../conexao/data.php';
        $sql  = sprintf("INSERT INTO funcionario (nome, apelido, cargo, setor, cpf, rg, ctps, data_nasc, estado_civil, numero_filhos, tipo_sanguineo, email, fone_com, fone_res, celular, escolaridade, situacao, ano, endereco, bairro, cidade, estado, cep, login, senha, nivel) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
            GetSQLValueString($_POST['nome'], "text"),
            GetSQLValueString($_POST['apelido'], "text"),
            GetSQLValueString($_POST['cargo'], "text"),
            GetSQLValueString($_POST['setor'], "text"),
            GetSQLValueString($_POST['CPF'], "text"),
            GetSQLValueString($_POST['RG'], "text"),
            GetSQLValueString($_POST['CTPS'], "text"),
            GetSQLValueString($_POST['data_nasc'], "text"),
            GetSQLValueString($_POST['estado_civil'], "text"),
            GetSQLValueString($_POST['num_filhos'], "text"),
            GetSQLValueString($_POST['tipo_sang'], "text"),
            GetSQLValueString($_POST['email'], "text"),
            GetSQLValueString($_POST['fone_com'], "text"),
            GetSQLValueString($_POST['fone_res'], "text"),
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
            GetSQLValueString($_POST['nivel'], "text"));
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
