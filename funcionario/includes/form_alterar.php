<form name="funcionario" method="POST" action=" ">
<div class="row">
    <input type="hidden" name="id" value="<?php echo $funcionario['codigo']; ?>">
    <div class="col-xs-6">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="digite seu nome" value="<?php echo $funcionario["nome"]; ?>" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="apelido">Apelido</label>
            <input type="text" class="form-control" name="apelido" placeholder="digite seu apelido" value="<?php echo $funcionario["apelido"];?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="digite seu cargo" value="<?php echo $funcionario["cargo"];?>" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="setor">Setor</label>
            <input type="text" class="form-control" name="setor" placeholder="digite seu setor" value="<?php echo $funcionario["setor"];?>" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="CPF">CPF</label>
            <input type="text" class="form-control" name="CPF" placeholder="digite seu CPF" data-mask="999.999.999-99" value="<?php echo $funcionario["cpf"];?>" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="RG">RG</label>
            <input type="text" class="form-control" name="RG" placeholder="digite seu RG" value="<?php echo $funcionario["rg"];?>">
        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">
            <label for="CTPS">CTPS</label>
            <input type="text" class="form-control" name="CTPS" placeholder="digite seu CTPS" value="<?php echo $funcionario["ctps"];?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="data_nasc">Data de Nasc.</label>
            <input type="text" class="form-control" name="data_nasc" placeholder="digite sua data de nascimento" data-mask="99/99/9999" value="<?php echo $funcionario["data_nasc"];?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="tipo_sang">Tipo Sanguíneo</label>
            <input type="text" class="form-control" name="tipo_sang" placeholder="digite seu tipo sanguineo" value="<?php echo $funcionario["tipo_sanguineo"];?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="num_filho">Estado Civil:</label>
            <select name="estado_civil" class="form-control">
                <option <?php if ($funcionario["estado_civil"]== "SOLTEIRO(a)") echo "selected"; ?> value="Solteiro(a)">Solteiro(a)</option>
                <option <?php if ($funcionario["estado_civil"]== "CASADO(a)") echo "selected"; ?> value="Casado(a)">Casado(a)</option>
                <option <?php if ($funcionario["estado_civil"]== "VÍUVO(a)") echo "selected"; ?> value="Víuvo(a)">Víuvo(a)</option>
                <option <?php if ($funcionario["estado_civil"]== "SEPARADO(a)") echo "selected"; ?> value="Separado(a)">Separado(a)</option>

            </select>
        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">
            <label for="num_filho">N filhos:</label>
            <input type="text" class="form-control" name="num_filho" placeholder="0" value="<?php echo $funcionario["numero_filhos"];?>">
        </div>
    </div>
</div>
<div class="row">

    <div class="col-xs-6">
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="digite seu endereco" value="<?php echo $funcionario["endereco"];?>">
        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="digite seu cidade" value="<?php echo $funcionario["cidade"];?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="digite seu bairro" value="<?php echo $funcionario["bairro"];?>">
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xs-2">
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" class="form-control">
                <option value="RJ" <?php if ($funcionario["estado"]== "RJ") echo "selected"; ?> >Rio de Janeiro</option>
                <option value="AC" <?php if ($funcionario["estado"]== "AC") echo "selected"; ?>>Acre</option>
                <option value="AL" <?php if ($funcionario["estado"]== "AL") echo "selected"; ?>>Alagoas</option>
                <option value="AP" <?php if ($funcionario["estado"]== "AP") echo "selected"; ?>>Amap&aacute;</option>
                <option value="AM" <?php if ($funcionario["estado"]== "AM") echo "selected"; ?>>Amazonas</option>
                <option value="BA" <?php if ($funcionario["estado"]== "BA") echo "selected"; ?>>Bahia</option>
                <option value="CE" <?php if ($funcionario["estado"]== "CE") echo "selected"; ?>>Cear&aacute;</option>
                <option value="DF" <?php if ($funcionario["estado"]== "DF") echo "selected"; ?>>Distrito Federal</option>
                <option value="ES" <?php if ($funcionario["estado"]== "ES") echo "selected"; ?>>Esp&iacute;rito Santo</option>
                <option value="GO" <?php if ($funcionario["estado"]== "GO") echo "selected"; ?>>Goi&aacute;s</option>
                <option value="MA" <?php if ($funcionario["estado"]== "MA") echo "selected"; ?>>Maranh&atilde;o</option>
                <option value="MT" <?php if ($funcionario["estado"]== "MT") echo "selected"; ?>>Mato Grosso</option>
                <option value="MS" <?php if ($funcionario["estado"]== "MS") echo "selected"; ?>>Mato Grosso do Sul</option>
                <option value="MG" <?php if ($funcionario["estado"]== "MG") echo "selected"; ?>>Minas Gerais</option>
                <option value="PA" <?php if ($funcionario["estado"]== "PA") echo "selected"; ?>>Par&aacute;</option>
                <option value="PB" <?php if ($funcionario["estado"]== "PB") echo "selected"; ?>>Para&iacute;ba</option>
                <option value="PR" <?php if ($funcionario["estado"]== "PR") echo "selected"; ?>>Paran&aacute;</option>
                <option value="PE" <?php if ($funcionario["estado"]== "PE") echo "selected"; ?>>Pernambuco</option>
                <option value="PI" <?php if ($funcionario["estado"]== "PI") echo "selected"; ?>>Piau&iacute;</option>
                <option value="RN" <?php if ($funcionario["estado"]== "RN") echo "selected"; ?>>Rio Grande do Norte</option>
                <option value="RS" <?php if ($funcionario["estado"]== "RS") echo "selected"; ?>>Rio Grande do Sul</option>
                <option value="RO" <?php if ($funcionario["estado"]== "RO") echo "selected"; ?>>Rond&ocirc;nia</option>
                <option value="RR" <?php if ($funcionario["estado"]== "RR)") echo "selected"; ?>>Roraima</option>
                <option value="SC" <?php if ($funcionario["estado"]== "SC") echo "selected"; ?>>Santa Catarina</option>
                <option value="SP" <?php if ($funcionario["estado"]== "SP") echo "selected"; ?>>S&atilde;o Paulo</option>
                <option value="SE" <?php if ($funcionario["estado"]== "SE") echo "selected"; ?>>Sergipe</option>
                <option value="TO" <?php if ($funcionario["estado"]== "TO") echo "selected"; ?>>Tocantins</option>
            </select>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label for="CEP">CEP</label>
            <input type="text" class="form-control" name="CEP" placeholder="00000-000" data-mask="99999-999" value="<?php echo $funcionario["cep"];?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="fone_comercial">Fone Comercial</label>
            <input type="text" class="form-control" name="fone_comercial" placeholder="(XX)XXXX-XXXX" data-mask="(99)9999-9999" value="<?php echo $funcionario["fone_com"];?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="fone_residencial">Fone Residencial</label>
            <input type="text" class="form-control" name="fone_residencial" placeholder="(XX)XXXX-XXXX" data-mask="(99)9999-9999" value="<?php echo $funcionario["fone_res"];?>">
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" name="celular" placeholder="(XX)XXXX-XXXX" data-mask="(99)9999-9999" value="<?php echo $funcionario["celular"];?>">
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xs-9">
        <div class="form-group">
            <label for="escolaridade">Escolaridade</label><br>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="1º Grau" <?php echo ($funcionario["escolaridade"] == "1&ordm; Grau")?'checked':'' ?>/>
                1&ordm; Grau
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="2º Grau" <?php echo ($funcionario["escolaridade"] == "2&ordm; Grau")?'checked':'' ?>/>
                2&ordm; Grau
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="3º Grau" <?php echo ($funcionario["escolaridade"] == "3&ordm; Grau")?'checked':'' ?>/>
                3&ordm; Grau
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Pós Graduado" <?php echo ($funcionario["escolaridade"] == "Pós Graduado")?'checked':'' ?>/>
                P&oacute;s Graduado
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Mestrado" <?php echo ($funcionario["escolaridade"] == "Mestrado")?'checked':'' ?>/>
                Mestrado
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Doutorado" <?php echo ($funcionario["escolaridade"] == "Doutorado")?'checked':'' ?>/>
                Doutorado
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Pós Doutorado" <?php echo ($funcionario["escolaridade"] == "Pós Doutorado")?'checked':'' ?>/>
                P&oacute;s Doutorado </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4">
        <div class="form-group">
            <label for="situacao">Situação</label><br>
            <label class="radio-inline">
                <input type="radio" name="situacao" value="Completo" <?php echo ($funcionario["situacao"] == "Completo")?'checked':'' ?>/>
                Completo
            </label>
            <label class="radio-inline">
                <input type="radio" name="situacao" value="Incompleto" <?php echo ($funcionario["situacao"] == "Incompleto")?'checked':'' ?>/>
                Incompleto
            </label>
            <label class="radio-inline">
                <input type="radio" name="situacao" value="Cursando" <?php echo ($funcionario["situacao"] == "Cursando")?'checked':'' ?>/>
                Cursando
            </label>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label for="ano">Qual Ano?</label>
            <input type="text" class="form-control" name="ano" placeholder="digite seu ano" value="<?php echo $funcionario["ano"];?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="digite seu email" value="<?php echo $funcionario["email"];?>" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" name="login" placeholder="digite seu login" value="<?php echo $funcionario["login"];?>" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="digite sua senha" value="<?php echo $funcionario["senha"];?>" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="nivel">Nível</label><br>
            <label class="radio-inline">
                <input type="radio" name="nivel" value="0" <?php echo ($funcionario["nivel"] == 0)?'checked':'' ?> required/>
                Operador
            </label>
            <label class="radio-inline">
                <input type="radio" name="nivel" value="1" <?php echo ($funcionario["nivel"] == 1)?'checked':'' ?> required/>
                Administrador
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <button id="funcionario" name="funcionario" type="submit" class="btn btn-primary btn-lg">Editar</button>
            <a class="btn btn-info btn-lg" href="../funcionario">Voltar</a>
        </div>
    </div>
</div>
</form>