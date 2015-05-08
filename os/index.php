<?php
    $nivel_autorizado = "0,1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>
<?php include '../conexao/data.php';?>
<?php
$query = sprintf("SELECT Cod_Equipamento, Cliente, Funcionario, Equipamento, Data_Entrada, Problemacliente FROM ordemservico ORDER BY Cod_Equipamento");
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
                        Ordem de Serviços
                    </h1>
                    <a class="btn btn-labeled btn-success btn-md" href="selecionar_cliente.php">
                        <span class="btn-label" aria-hidden="true"><i class="glyphicon glyphicon-plus"></i></span> Inserir Ordem de Serviço
                    </a>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive ">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Data Entrada</th>
                                        <th>Cliente</th>
                                        <th>Problema Apresentado</th>
                                        <th>Equipamento</th>
                                        <th>Funcionário</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($linha = mysql_fetch_array($dados)){ ?>
                                    <tr>
                                        <td><?=$linha['Cod_Equipamento']?></td>
                                        <td><?=$linha['Data_Entrada']?></td>
                                        <td><?=$linha['Cliente']?></td>
                                        <td><span><?php echo $linha['Problemacliente']?></span></td>
                                        <td><?=$linha['Equipamento']?></td>
                                        <td><?=$linha['Funcionario']?></td>
                                        <td>
                                                <a href="fechar_os.php?id=<?php echo $linha['Cod_Equipamento'] ?>" class="btn-sm btn-warning">Fechar</a>
                                                <a href="editar_os.php?id=<?php echo $linha['Cod_Equipamento'] ?>" class="btn-sm btn-primary">Editar</a>
                                                <a href="deletar_os.php?id=<?php echo $linha['Cod_Equipamento'] ?>" class="btn-sm btn-danger">Deletar</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </body>
    <?php include '../includes/rodape.php';?>
</html>