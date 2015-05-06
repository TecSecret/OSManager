<form name="os" method="POST" action=" ">
    <input type="hidden" name="id" value="<?php echo $ordem_servico['Cod_Equipamento']; ?>">
        <div class="row">
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="tecnico">Técnico</label>
                    <input type="text" class="form-control" name="tecnico" placeholder="Digite o nome do técnico" value="<?php echo $ordem_servico['Funcionario']; ?>">
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

    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="equipamento">Equipamento</label>
                <select name="equipamento" class="form-control">
                    <option>Selecione</option>
                    <option value="COMPUTADOR" <?php if ($ordem_servico["Equipamento"]== "COMPUTADOR") echo "selected"; ?>>Computador</option>
                    <option value="MONITOR" <?php if ($ordem_servico["Equipamento"]== "MONITOR") echo "selected"; ?>>Monitor</option>
                    <option value="CPU" <?php if ($ordem_servico["Equipamento"]== "CPU") echo "selected"; ?>> CPU</option>
                    <option value="NOTEBOOK" <?php if ($ordem_servico["Equipamento"]== "NOTEBOOK") echo "selected"; ?>>Notebook</option>
                    <option value="IMPRESSORA" <?php if ($ordem_servico["Equipamento"]== "IMPRESSORA") echo "selected"; ?>>Impressora</option>
                    <option value="SCANNER" <?php if ($ordem_servico["Equipamento"]== "SCANNER") echo "selected"; ?>>Scaner</option>
                    <option value="NOBREAK" <?php if ($ordem_servico["Equipamento"]== "NOBREAK") echo "selected"; ?>>Nobreak</option>
                    <option value="ESTABILIZADOR" <?php if ($ordem_servico["Equipamento"]== "ESTABILIZADOR") echo "selected"; ?>>Estabilizador</option>
                    <option value="TELEVISOR" <?php if ($ordem_servico["Equipamento"]== "TELEVISOR") echo "selected"; ?>>Televisor</option>
                    <option value="MICROONDAS" <?php if ($ordem_servico["Equipamento"]== "MICROONDAS") echo "selected"; ?>>Microondas</option>
                    <option value="APARELHO DE SOM" <?php if ($ordem_servico["Equipamento"]== "APARELHO DE SOM") echo "selected"; ?>>Aparelho de Som</option>
                    <option value="DVD" <?php if ($ordem_servico["Equipamento"]== "DVD") echo "selected"; ?>>DVD</option>
                    <option value="VIDEO CASSETE" <?php if ($ordem_servico["Equipamento"]== "VIDEO CASSETE") echo "selected"; ?>>Video Cassete</option>
                    <option value="OUTROS" <?php if ($ordem_servico["Equipamento"]== "OUTROS") echo "selected"; ?>>Outros</option>
                </select>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" name="marca" placeholder="Digite a marca do equipamento" value="<?php echo $ordem_servico['Marca']; ?>">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="garantia">Garantia</label>
                <select name="garantia" class="form-control">
                    <option value="nao" <?php if ($ordem_servico["Garantia"]== "nao") echo "selected"; ?>>Não</option>
                    <option value="sim" <?php if ($ordem_servico["Garantia"]== "sim") echo "selected"; ?>>Sim</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" name="modelo"  placeholder="Digite o modelo do equipamento" value="<?php echo $ordem_servico['Modelo']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="num_patrimonio">N Patrimonio</label>
                <input type="text" class="form-control" name="num_patrimonio" placeholder="Digite o numero do patrimonio" value="<?php echo $ordem_servico['Patrimonio']; ?>">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="num_serie">N Serie</label>
                <input type="text" class="form-control" name="num_serie" placeholder="Digite o numero da serie" value="<?php echo $ordem_servico['Serie']; ?>">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="setor">Setor</label>
                <input type="text" class="form-control" name="setor" placeholder="Digite o setor" value="<?php echo $ordem_servico['Setor']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="data_entrada">Data da Entrada:</label>
                <input type="text" class="form-control" name="data_entrada" data-mask="99/99/9999" placeholder="Digite a data da entrada" value="<?php echo $ordem_servico['Data_Entrada']; ?>">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label for="hora_entrada">Hora da Entrada:</label>
                <input type="text" class="form-control" name="hora_entrada" data-mask="99:99" placeholder="Digite a hora da entrada" value="<?php echo $ordem_servico['Hora_Entrada']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="diagnostico">Diagnostico do cliente:</label>
                <textarea class="form-control" rows="5" name="diagnostico"><?php echo $ordem_servico['Problemacliente']?></textarea>
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