
<?php
    $nivel_autorizado = "1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>
<?php
    include '../conexao/data.php';
    $query = sprintf("SELECT codigo, nome, cpf, cargo, setor, login FROM funcionario ORDER BY codigo");
    $dados = mysql_query($query, $data) or die(mysql_error());
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
                        Backup
                    </h1>
                    <div class="text-center">
                        <h2>
                            Escolha a opção
                        </h2>
                        <a class="btn btn-labeled btn-success btn-md" href="realizar_backup.php">
                            <span class="btn-label" aria-hidden="true"><i class="glyphicon glyphicon-cog"></i></span> Realizar Backup
                        </a>
                        <a class="btn btn-labeled btn-info btn-md" href="importar_backup.php">
                            <span class="btn-label" aria-hidden="true"><i class="glyphicon glyphicon-upload"></i></span> Importar Backup
                        </a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </body>
    <?php include '../includes/rodape.php';?>
</html>