<?php include '../conexao/data.php';?>
<?php
$query = sprintf("SELECT * FROM CLIENTE");
$dados = mysql_query($query, $data) or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php include '../includes/head.php';?>
<?php include '../includes/bootstrap.php';?>
<script type="text/javascript">
    <!--
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
    }
    //-->
</script>
<body>
    <?php include '../includes/navbar_menu.php';?>
    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php include '../includes/navbar_lateral.php';?>
            <div class="col-sm-9 col-md-10 main">
                <h1 class="page-header">
                    Selecione o Cliente
                </h1>
                <?php include 'includes/form_selecionar.php';?>
            </div>
        </div>
    </div>
    <?php include '../includes/rodape.php';?>

</body>
