<?php
    $nivel_autorizado = "0,1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>

<?php
    include '../includes/get_sql_value_string.php';

    if(isset($_POST['cliente'])){
        include '../conexao/data.php';

        $sql  =  sprintf("UPDATE cliente SET nome=%s, cpf=%s, email=%s, fone_com=%s, fone_res=%s, celular=%s, endereco=%s, bairro=%s, cidade=%s, estado=%s, CEP=%s WHERE codigo=%s",
            GetSQLValueString($_POST['nome'], "text"),
            GetSQLValueString($_POST['cpf'], "text"),
            GetSQLValueString($_POST['email'], "text"),
            GetSQLValueString($_POST['fone_com'], "text"),
            GetSQLValueString($_POST['fone_res'], "text"),
            GetSQLValueString($_POST['celular'], "text"),
            GetSQLValueString($_POST['endereco'], "text"),
            GetSQLValueString($_POST['bairro'], "text"),
            GetSQLValueString($_POST['cidade'], "text"),
            GetSQLValueString($_POST['estado'], "text"),
            GetSQLValueString($_POST['CEP'], "text"),
            GetSQLValueString($_POST['id'], "int"));

        $result = mysql_query($sql, $data)  or die(mysql_error());
        mysql_close($data);
        header("location: index.php");
    }
?>
<?php
if(empty($_POST['cliente'])){

    include '../conexao/data.php';

    $id =  $_GET['id'];

    $sql = "SELECT * FROM cliente WHERE codigo = '$id'";

    $dados  = mysql_query($sql);

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
                    Editar Cliente
                </h1>
                <?php include 'includes/form_alterar.php';?>
            </div>
        </div>
    </div>
    <?php include '../includes/rodape.php';?>

</body>
