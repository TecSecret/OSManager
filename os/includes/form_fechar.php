<form name="os" method="POST" action=" ">
    <input type="hidden" name="id" value="<?php echo $ordem_servico['Cod_Equipamento']; ?>">
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="tecnico">Técnico</label>
                <input type="text" class="form-control" name="tecnico" placeholder="Digite o nome do técnico" value="<?php echo $ordem_servico['Funcionario']; ?>" required>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <select name="cliente" class="form-control">
                    <option value="<?=$cliente['nome']?>"><?=$cliente['nome']?></option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
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
                <p><?=$cliente['fone_com']?> <?=$cliente['fone_res']?> <?=$cliente['celular']?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="equipamento">Equipamento</label>
                    <p><?=$ordem_servico['Equipamento']?></p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="marca">Marca</label>
                <p><?=$ordem_servico['Marca']?></p>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="garantia">Garantia</label>
                <p><?=$ordem_servico['Garantia']?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <p><?=$ordem_servico['Modelo']?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="num_patrimonio">N Patrimonio</label>
                <p><?=$ordem_servico['Patrimonio']?></p>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="num_serie">N Serie</label>
                <p><?=$ordem_servico['Serie']?></p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="setor">Setor</label>
                <p><?=$ordem_servico['Setor']?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="data_entrada">Data da Entrada:</label>
                <p><?=$ordem_servico['Data_Entrada']?></p>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="hora_entrada">Hora da Entrada:</label>
                <p><?=$ordem_servico['Hora_Entrada']?></p>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="prev_diag">Previsão do Diagnostico Tec.</label>
                <input type="text" class="form-control" name="prev_diag" data-mask="99/99/9999" value="<?php echo date('d/m/Y')?>" placeholder="Digite a Data">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="hora_diag">Hora</label>
                <input type="text" class="form-control" name="hora_diag" data-mask="99:99" placeholder="Digite a Hora">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="problemacliente">Diagnostico do cliente:</label>
                <p><?=$ordem_servico['Problemacliente']?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="diag_tec">Diagnostico do Técnico</label>
                <textarea class="form-control" rows="2" name="diag_tec" required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="solucao">Solução</label>
                <textarea class="form-control" rows="1" name="solucao" required></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="prev_entr">Previsão de Entrega</label>
                <input type="text" class="form-control" name="prev_entr" data-mask="99/99/9999" value="<?php echo date('d/m/Y')?>" placeholder="Digite a data">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label for="data_entr">Data Entrega</label>
                <input type="text" class="form-control" name="data_entr" data-mask="99/99/9999" value="<?php echo date('d/m/Y')?>" placeholder="Digite a data da entrega">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label for="recebido">Recebido por</label>
                <input type="text" class="form-control" name="recebido" placeholder="Digite o recebedor">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="valor">Valor(R$)</label>
                <input type="text" class="form-control" name="valor"  placeholder="00.00">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <input name="arquivo" type="hidden" id="arquivo" value="s" />
                <button id="os" name="os" type="submit" class="btn btn-primary btn-lg">Fechar</button>
                <a class="btn btn-info btn-lg" href="../os">Voltar</a>
            </div>
        </div>
    </div>
</form>