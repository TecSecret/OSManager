<?php
    $nivel_autorizado = "0,1";
    $redirecionar_login = "login.php";
    include 'includes/verificar_acesso.php';
?>
<?php
    include 'conexao/data.php';
    $query = sprintf("SELECT Cod_Equipamento, Cliente, Problemacliente FROM ordemservico WHERE Arquivo = 'n' LIMIT 5");
    $ultimas_os_abertas = mysql_query($query, $data);

    $query = sprintf("SELECT codigo, nome FROM cliente ORDER BY codigo DESC LIMIT 5");
    $ultimos_clientes = mysql_query($query, $data);

    $query = sprintf("SELECT Cod_Equipamento, Funcionario, Problemacliente, Dataentrega FROM ordemservico  WHERE Arquivo = 's' ORDER BY Dataentrega LIMIT 5 ");
    $ultimas_os_fechadas= mysql_query($query, $data);




?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/head.php';?>
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/styles.css" rel="stylesheet">

<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/scripts.js"></script>
<body>

<?php include 'includes/navbar_menu.php';?>

    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
                <?php include 'includes/navbar_lateral.php';?>

            <div class="col-sm-9 col-md-10 main">
              <h1 class="page-header">
                Principal
              </h1>

            <div class="row">
                    <div class="col-xs-6">
                        <h2 class="sub-header">Ultimas OS Abertas</h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Cliente</th>
                                    <th>Detalhes</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php while($linha = mysql_fetch_array($ultimas_os_abertas)){ ?>
                                    <tr>
                                    <td><?=$linha['Cod_Equipamento']?></td>
                                    <td><?=$linha['Cliente']?></td>
                                    <td><a href="os/editar_os.php?id=<?=$linha['Cod_Equipamento']?>">mais detalhes...</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <h2 class="sub-header">Ultimas OS Entregues</h2>
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Funcionário</th>
                                    <th>Problema</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while($linha = mysql_fetch_array($ultimas_os_fechadas)){ ?>
                                    <tr>
                                        <td><?=$linha['Cod_Equipamento']?></td>
                                        <td><?=$linha['Funcionario']?></td>
                                        <td><a href="os/editar_os.php?id=<?=$linha['Cod_Equipamento']?>">mais detalhes...</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h2 class="sub-header">Ultimos Clientes</h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while($linha = mysql_fetch_array($ultimos_clientes)){ ?>
                                    <tr>
                                        <td><?=$linha['codigo']?></td>
                                        <td><?=$linha['nome']?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include 'includes/rodape.php'; ?>
</html>