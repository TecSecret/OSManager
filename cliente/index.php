<?php
    $nivel_autorizado = "0,1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>
<?php
    if(isset($_POST['pesquisar'])) {

        include '../conexao/data.php';
        $parametro = $_POST['parametro'];
        if ($parametro == "")
            $parametro = "nome";
        $palavra_chave =  $_POST['palavra_chave'];
        $query = "SELECT codigo, nome, cpf   FROM cliente WHERE ".$parametro." like '%".$palavra_chave."%'";
        $dados = mysql_query($query, $data) or die(mysql_error());
        mysql_close($data);

    }
?>
<?php
    if(empty($_POST['palavra_chave'])) {
        include '../conexao/data.php';
        $query = sprintf("SELECT codigo, nome, cpf  FROM cliente ORDER BY codigo");

        $total_reg = "5";
        if (!@$_GET['pag']) {
            $pag = "1";
        } else {
            $pag = $_GET['pag'];
        }


        if (!$pag) {
            $pc = "1";
        } else {
            $pc = $pag;
        }

        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;


        $todos = mysql_query("$query");
        $dados = mysql_query("$query LIMIT $inicio, $total_reg");

        $tr = mysql_num_rows($todos);
        $tp = $tr / $total_reg;

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
                        Clientes
                    </h1>

                    <nav class="navbar navbar-default">
                        <div class="navbar-form navbar-left">
                            <a class="btn btn-labeled btn-success" href="add_cliente.php">
                                <span class="btn-label" aria-hidden="true"><i class="glyphicon glyphicon-plus"></i></span> Inserir Cliente
                            </a>
                        </div>

                        <form name="pesquisar" method="POST" class="navbar-form navbar-right" >
                            <div class="form-group">
                                <select name="parametro" class="form-control">
                                    <option value="">Selecione um parametro</option>
                                    <option value="nome">Nome</option>
                                    <option value="cpf">CPF</option>
                                    <option value="codigo">Código</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="palavra_chave" class="form-control" placeholder="Digite a palavra-chave">
                            </div>
                            <button id="pesquisar" name="pesquisar" type="submit" class="btn btn-default">Pesquisar</button>
                        </form>
                    </nav>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th class="col-xs-1">Ações</th>
                                <th class="col-xs-1"></th>
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
                                </td>
                                <td>
                                    <a href="deletar_cliente.php?id=<?php echo $linha['codigo'] ?>" class="btn-sm btn-danger">Deletar</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <div align="right">
                            <?php if(empty($_POST['palavra_chave'])){ ?>
                                <div class="pagination pagination-centered" align="center">
                                    <ul class="pager">
                                        <?php
                                        $anterior = $pc -1;
                                        $proximo = $pc +1;
                                        ?>
                                        <?php
                                        if ($pc>1) {
                                            ?>
                                            <li><a href="?pag=<?php echo $anterior ?>"><i class="glyphicon glyphicon-arrow-left"></i> Anterior</a></li>
                                        <?php } ?>
                                        <?php
                                        if ($pc<$tp) {
                                            ?>
                                            <li><a href="?pag=<?php echo $proximo ?>">Próximo <i class="glyphicon glyphicon-arrow-right"></i></a></li>
                                        <?php }?>
                                    </ul>

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </body>
    <?php include '../includes/rodape.php';?>
</html>