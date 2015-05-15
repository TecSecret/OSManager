<?php
    $nivel_autorizado = "1";
    $redirecionar_login = "../login.php";
    include '../includes/verificar_acesso.php';
?>

<?php
    include '../conexao/data.php';
    $sucesso = False;

    if (isset($_FILES['xmlcliente'])){

        $xml = simplexml_load_file($_FILES['xmlcliente']['tmp_name']);

        foreach($xml as $cliente) {
            $sql = "INSERT INTO cliente (nome, cpf, email, fone_com, fone_res, celular, endereco, bairro, cidade, estado, cep)
                VALUES ('$cliente->nome', '$cliente->cpf', '$cliente->email','$cliente->fone_com','$cliente->fone_res',
                        '$cliente->celular','$cliente->endereco','$cliente->bairro','$cliente->cidade','$cliente->estado', '$cliente->cep')";
            mysql_query($sql, $data);
        }
        $sucesso = True;

        mysql_close($data);
    }
    if (isset($_FILES['xmlfuncionario'])){
        $xml = simplexml_load_file($_FILES['xmlfuncionario']['tmp_name']);

        foreach($xml as $funcionario){
            $sql = "INSERT INTO funcionario (nome, apelido, cargo, setor, cpf, rg, ctps, data_nasc, estado_civil, numero_filhos, tipo_sanguineo, email, fone_com,
                                fone_res, celular, escolaridade, situacao, ano, endereco, bairro, cidade, estado, cep, login, senha, nivel)
                VALUES ('$funcionario->nome', '$funcionario->apelido', '$funcionario->cargo','$funcionario->setor','$funcionario->cpf',
                        '$funcionario->rg','$funcionario->ctps','$funcionario->data_nasc','$funcionario->estado_civil','$funcionario->numero_filhos', '$funcionario->tipo_sanguineo', '$funcionario->email','$funcionario->fone_com',
                        '$funcionario->fone_res', '$funcionario->celular', '$funcionario->escolaridade', '$funcionario->situacao', '$funcionario->ano', '$funcionario->endereco', '$funcionario->bairro', '$funcionario->cidade', '$funcionario->estado',
                        '$funcionario->cep','$funcionario->login', '$funcionario->senha', '$funcionario->nivel')";
            mysql_query($sql, $data);
        }
        $sucesso = True;

        mysql_close($data);
    }
    if (isset($_FILES['xmlos'])){
        $xml = simplexml_load_file($_FILES['xmlos']['tmp_name']);

        foreach($xml as $os){
            $sql = "INSERT INTO ordemservico (Funcionario, Data_Entrada, Hora_Entrada, Cliente, Equipamento, Modelo, Marca, Patrimonio, Serie, Setor, Garantia, Problemacliente, Data_Agenda, Hora_Agenda, DiagnosticoTecnico, Solucao, Previsaoentrega, Dataentrega, Recebido, Arquivo, valor)
                VALUES ('$os->Funcionario', '$os->Data_Entrada', '$os->Hora_Entrada','$os->Cliente','$os->Equipamento',
                        '$os->Modelo','$os->Marca','$os->Patrimonio','$os->Serie','$os->Setor', '$os->Garantia', '$os->Problemacliente',
                        '$os->Data_Agenda', '$os->Hora_Agenda', '$os->DiagnosticoTecnico', '$os->Solucao', '$os->Previsaoentrega', '$os->Dataentrega',
                        '$os->Recebido', '$os->Arquivo', '$os->valor')";
            mysql_query($sql, $data);
        }
        $sucesso = True;

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
                Importar Backup
            </h1>
            <?php if ($sucesso == True): ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Sucesso!</strong> Ficheiro importado com sucesso.
                </div>
            <?php endif; ?>
            <?php include 'includes/form_importar.php';?>
        </div>
    </div>
</div>
<?php include '../includes/rodape.php';?>

</body>
