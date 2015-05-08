<?php
    $nivel_autorizado = "0,1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>

<?php include '../conexao/data.php';?>
<?php
    $query = sprintf("SELECT codigo, nome, cpf  FROM cliente ORDER BY codigo");
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
                        Clientes
                    </h1>
                    <a class="btn btn-labeled btn-success btn-md" href="add_cliente.php">
                        <span class="btn-label" aria-hidden="true"><i class="glyphicon glyphicon-plus"></i></span> Inserir Cliente
                    </a>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Ações</th>
                             </tr>
                            </thead>
                            <tbody>
                            <?php while($linha = mysql_fetch_array($dados)){ ?>
                            <tr>
                                <td><?=$linha['codigo']?></td>
                                <td><?=$linha['nome']?></td>
                                <td><?=$linha['cpf']?></td>
                                
                                <td>
                                    <a href="editar_cliente.php?id=<?php echo $linha['codigo'] ?>" class="btn-sm btn-primary">Editar</a>
                                    <a href="deletar_cliente.php?id=<?php echo $linha['codigo'] ?>" class="btn-sm btn-danger">Deletar</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </body>
    <?php include '../includes/rodape.php';?>
</html>