<?php
    $nivel_autorizado = "1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>
<?php
    include '../conexao/data.php';
    $gerar = false;
    if (isset($_POST['realizar_cliente'])){
        $xml = new SimpleXMLElement("<xml/>");
        $clientes = mysql_query("select * from cliente", $data);
        while($cliente = mysql_fetch_assoc($clientes)){
            $info = $xml->addChild('cliente');
            $info->addChild('codigo', $cliente['codigo']);
            $info->addChild('nome', $cliente['nome']);
            $info->addChild('cpf', $cliente['cpf']);
            $info->addChild('email', $cliente['email']);
            $info->addChild('fone_com', $cliente['fone_com']);
            $info->addChild('fone_res', $cliente['fone_res']);
            $info->addChild('celular', $cliente['celular']);
            $info->addChild('endereco', $cliente['endereco']);
            $info->addChild('bairro', $cliente['bairro']);
            $info->addChild('cidade', $cliente['cidade']);
            $info->addChild('estado', $cliente['estado']);
            $info->addChild('cep', $cliente['cep']);
        }

        mysql_close($data);
        $gerar = True;
        header('Content-Disposition: attachment; filename=clientes.xml');
        header('Content-Type: text/xml');

        echo $xml->saveXML();

    }elseif(isset($_POST['realizar_funcionario'])){
        $funcionarios = mysql_query("select * from funcionario", $data);
        $xml = new SimpleXMLElement('<xml/>');
        while($funcionario = mysql_fetch_assoc($funcionarios)){
            $info = $xml->addChild('funcionario');
            $info->addChild('codigo', $funcionario['codigo']);
            $info->addChild('nome', $funcionario['nome']);
            $info->addChild('apelido', $funcionario['apelido']);
            $info->addChild('cargo', $funcionario['cargo']);
            $info->addChild('setor', $funcionario['setor']);
            $info->addChild('cpf', $funcionario['cpf']);
            $info->addChild('rg', $funcionario['rg']);
            $info->addChild('ctps', $funcionario['ctps']);
            $info->addChild('data_nasc', $funcionario['data_nasc']);
            $info->addChild('estado_civil', $funcionario['estado_civil']);
            $info->addChild('numero_filhos', $funcionario['numero_filhos']);
            $info->addChild('tipo_sanguineo', $funcionario['tipo_sanguineo']);
            $info->addChild('email', $funcionario['email']);
            $info->addChild('fone_com', $funcionario['fone_com']);
            $info->addChild('fone_res', $funcionario['fone_res']);
            $info->addChild('celular', $funcionario['celular']);
            $info->addChild('escolaridade', $funcionario['escolaridade']);
            $info->addChild('situacao', $funcionario['situacao']);
            $info->addChild('ano', $funcionario['ano']);
            $info->addChild('endereco', $funcionario['endereco']);
            $info->addChild('bairro', $funcionario['bairro']);
            $info->addChild('cidade', $funcionario['cidade']);
            $info->addChild('estado', $funcionario['estado']);
            $info->addChild('cep', $funcionario['cep']);
            $info->addChild('login', $funcionario['login']);
            $info->addChild('senha', $funcionario['senha']);
            $info->addChild('nivel', $funcionario['nivel']);
        }

        mysql_close($data);
        $gerar = True;
        header('Content-Type: text/xml');
        header('Content-Disposition: attachment; filename=funcionario.xml');


        echo $xml->saveXML();
    }elseif(isset($_POST['realizar_os'])) {
        $ordemservicos = mysql_query("select * from ordemservico", $data);
        $xml = new SimpleXMLElement('<xml/>');
        while ($ordemservico = mysql_fetch_assoc($ordemservicos)) {
            $info = $xml->addChild('ordemservico');
            $info->addChild('Cod_Equipamento', $ordemservico['Cod_Equipamento']);
            $info->addChild('Funcionario', $ordemservico['Funcionario']);
            $info->addChild('Data_Entrada', $ordemservico['Data_Entrada']);
            $info->addChild('Hora_Entrada', $ordemservico['Hora_Entrada']);
            $info->addChild('Cliente', $ordemservico['Cliente']);
            $info->addChild('Equipamento', $ordemservico['Equipamento']);
            $info->addChild('Modelo', $ordemservico['Modelo']);
            $info->addChild('Marca', $ordemservico['Marca']);
            $info->addChild('Patrimonio', $ordemservico['Patrimonio']);
            $info->addChild('Serie', $ordemservico['Serie']);
            $info->addChild('Setor', $ordemservico['Setor']);
            $info->addChild('Garantia', $ordemservico['Garantia']);
            $info->addChild('Problemacliente', $ordemservico['Problemacliente']);
            $info->addChild('Data_Agenda', $ordemservico['Data_Agenda']);
            $info->addChild('Hora_Agenda', $ordemservico['Hora_Agenda']);
            $info->addChild('DiagnosticoTecnico', $ordemservico['DiagnosticoTecnico']);
            $info->addChild('Solucao', $ordemservico['Solucao']);
            $info->addChild('Previsaoentrega', $ordemservico['Previsaoentrega']);
            $info->addChild('Dataentrega', $ordemservico['Dataentrega']);
            $info->addChild('Recebido', $ordemservico['Recebido']);
            $info->addChild('Arquivo', $ordemservico['Arquivo']);
            $info->addChild('valor', $ordemservico['valor']);

        }

        mysql_close($data);
        $gerar = True;
        header('Content-Disposition: attachment; filename=ordemservico.xml');
        header('Content-Type: text/xml');

        echo $xml->saveXML();
    }
?>

<?php if (!$gerar) {?>
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
                Gerar Backup
            </h1>
            <?php include 'includes/form_realizar.php';?>
        </div>
    </div>
</div>
<?php include '../includes/rodape.php';?>

</body>
<?php } ?>