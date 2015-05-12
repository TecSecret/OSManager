<?php
    $nivel_autorizado = "0,1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>
<?php
if(isset($_POST['pesquisar'])) {
    include '../conexao/data.php';
    $parametro = $_POST['parametro'];
    $palavra_chave =  $_POST['palavra_chave'];
    if($parametro == "Arquivo"){
        $palavra_chave = 's';
    }
    if ($parametro == ""){
        $parametro = "Arquivo";
        $palavra_chave = 'n';
    }

    $query = "SELECT Cod_Equipamento, Cliente, Funcionario, Equipamento, Data_Entrada, Problemacliente FROM ordemservico  WHERE ".$parametro." like '%".$palavra_chave."%'";
    $dados = mysql_query($query, $data) or die(mysql_error());
    mysql_close($data);
}
?>

<?php
    if(!isset($_POST['pesquisar'])) {
    include '../conexao/data.php';
        $query = sprintf("SELECT Cod_Equipamento, Cliente, Funcionario, Equipamento, Data_Entrada, Problemacliente FROM ordemservico WHERE Arquivo = 'n' ORDER BY Cod_Equipamento");

        $total_reg = "5";
        if (!@$_GET['pag']){
            $pag = "1";
        }else{
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
                        Ordem de Serviços em Aberto
                    </h1>
                    <nav class="navbar navbar-default">
                        <div class="navbar-form navbar-left">
                            <a class="btn btn-labeled btn-success navbar-nav navbar-right" href="add_os.php">
                                <span class="btn-label" aria-hidden="true"><i class="glyphicon glyphicon-plus"></i></span> Inserir Ordem de Serviço
                            </a>
                        </div>

                        <form name="pesquisar" method="POST" class="navbar-form navbar-right" >
                            <div class="form-group">
                                <select name="parametro" class="form-control">
                                    <option value="">Selecione um parametro</option>
                                    <option value="Arquivo">{{OS Fechadas}}</option>
                                    <option value="Cod_Equipamento">Código</option>
                                    <option value="Cliente">Cliente</option>
                                    <option value="Funcionario">Funcionario</option>
                                    <option value="Data_Entrada">Data de Entrada</option>
                                    <option value="Problemacliente">Problema do Cliente</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="palavra_chave" class="form-control" placeholder="Digite a palavra-chave">
                            </div>
                            <button id="pesquisar" name="pesquisar" type="submit" class="btn btn-default">Pesquisar</button>
                        </form>
                    </nav>
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
                                <div align="right">
                                    <?php if(!isset($_POST['pesquisar'])){ ?>
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
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </body>
    <?php include '../includes/rodape.php';?>
</html>