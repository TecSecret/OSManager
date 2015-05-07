<form name="os" method="POST" action=" ">
<?php while($cliente= mysql_fetch_array($resultado_cliente)){?>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="tecnico">Técnico</label>
            <input type="text" class="form-control" name="tecnico" placeholder="Digite o nome do técnico" value="<?php echo $_SESSION["login"]?>">
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label for="cliente">Cliente</label>
            <select name="cliente" class="form-control">
                <option><?=$cliente['nome']?></option>
            </select>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="form-group">
            <label for="endereco">Endereco</label>
            <p><?=$cliente['endereco']?></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="CPF">CPF</label>
            <p><?=$cliente['cpf']?></p>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="email">Email</label>
            <p><?=$cliente['email']?></p>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label for="telefones">Telefones</label>
            <p><?=$cliente['fone_com']?> | <?=$cliente['fone_res']?> | <?=$cliente['celular']?></p>
        </div>
    </div>
</div>
<?php
}
?>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="equipamento">Equipamento</label>
            <select name="equipamento" class="form-control">
                <option>Selecione</option>
                <option value="COMPUTADOR">Computador</option>
                <option value="MONITOR">Monitor</option>
                <option value="CPU">CPU</option>
                <option value="NOTEBOOK">Notebook</option>
                <option value="IMPRESSORA">Impressora</option>
                <option value="SCANNER">Scaner</option>
                <option value="NOBREAK">Nobreak</option>
                <option value="ESTABILIZADOR">Estabilizador</option>
                <option value="TELEVISOR">Televisor</option>
                <option value="MICROONDAS">Microondas</option>
                <option value="APARELHO DE SOM">Aparelho de Som</option>
                <option value="DVD">DVD</option>
                <option value="VIDEO CASSETE">Video Cassete</option>
                <option value="OUTROS">Outros</option>
            </select>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" name="marca" placeholder="Digite a marca do equipamento">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="garantia">Garantia</label>
            <select name="garantia" class="form-control">
                <option value="nao">Não</option>
                <option value="sim">Sim</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" name="modelo"  placeholder="Digite o modelo do equipamento">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="num_patrimonio">N Patrimonio</label>
            <input type="text" class="form-control" name="num_patrimonio" placeholder="Digite o numero do patrimonio">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="num_serie">N Serie</label>
            <input type="text" class="form-control" name="num_serie" placeholder="Digite o numero da serie">
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label for="setor">Setor</label>
            <input type="text" class="form-control" name="setor" placeholder="Digite o setor">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4">
        <div class="form-group">
            <label for="data_entrada">Data da Entrada:</label>
            <input type="text" class="form-control" name="data_entrada" data-mask="99/99/9999" placeholder="Digite a data da entrada">
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label for="hora_entrada">Hora da Entrada:</label>
            <input type="text" class="form-control" name="hora_entrada" data-mask="99:99" placeholder="Digite a hora da entrada">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label for="diagnostico">Diagnostico do cliente:</label>
            <textarea class="form-control" rows="5" name="diagnostico"></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <button id="os" name="os" type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
        </div>
    </div>
</div>
</form>