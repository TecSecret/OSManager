<form name="funcionario" method="POST" action=" ">
<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="digite seu nome" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="apelido">Apelido</label>
            <input type="text" class="form-control" name="apelido" placeholder="digite seu apelido">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="digite seu cargo" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="setor">Setor</label>
            <input type="text" class="form-control" name="setor" placeholder="digite seu setor" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="CPF">CPF</label>
            <input type="text" class="form-control" name="CPF" data-mask="999.999.999-99" placeholder="digite seu CPF" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="RG">RG</label>
            <input type="text" class="form-control" name="RG" placeholder="digite seu RG">
        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">
            <label for="CTPS">CTPS</label>
            <input type="text" class="form-control" name="CTPS" placeholder="digite seu CTPS">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="data_nasc">Data de Nasc.</label>
            <input type="text" class="form-control" name="data_nasc" data-mask="99/99/9999" placeholder="digite sua data de nascimento">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="tipo_sang">Tipo Sanguíneo</label>
            <input type="text" class="form-control" name="tipo_sang" placeholder="digite seu tipo sanguineo">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="num_filho">Estado Civil:</label>
            <select name="estado_civil" class="form-control">
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Víuvo(a)">Víuvo(a)</option>
                <option value="Separado(a)">Separado(a)</option>

            </select>
        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">
            <label for="num_filho">N filhos:</label>
            <input type="text" class="form-control" name="num_filho" placeholder="0">
        </div>
    </div>
</div>
<div class="row">

    <div class="col-xs-6">
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="digite seu endereco">
        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="digite seu cidade">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="digite seu bairro">
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xs-2">
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" class="form-control">
                <option value="RJ">Rio de Janeiro</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amap&aacute;</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Cear&aacute;</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Esp&iacute;rito Santo</option>
                <option value="GO">Goi&aacute;s</option>
                <option value="MA">Maranh&atilde;o</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Par&aacute;</option>
                <option value="PB">Para&iacute;ba</option>
                <option value="PR">Paran&aacute;</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piau&iacute;</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rond&ocirc;nia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">S&atilde;o Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label for="CEP">CEP</label>
            <input type="text" class="form-control" name="CEP" data-mask="99999-999" placeholder="00000-000">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="fone_comercial">Fone Comercial</label>
            <input type="text" class="form-control" name="fone_comercial" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="fone_residencial">Fone Residencial</label>
            <input type="text" class="form-control" name="fone_residencial" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX">
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" name="celular" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX">
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xs-9">
        <div class="form-group">
            <label for="escolaridade">Escolaridade</label><br>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="1º Grau" />
                1&ordm; Grau
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="2º Grau" />
                2&ordm; Grau
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="3º Grau" />
                3&ordm; Grau
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Pós Graduado" />
                P&oacute;s Graduado
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Mestrado" />
                Mestrado
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Doutorado" />
                Doutorado
            </label>
            <label class="radio-inline">
                <input type="radio" name="escolaridade" value="Pós Doutorado" />
                P&oacute;s Doutorado </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4">
        <div class="form-group">
            <label for="situacao">Situação</label><br>
            <label class="radio-inline">
                <input type="radio" name="situacao" value="Completo" />
                Completo
            </label>
            <label class="radio-inline">
                <input type="radio" name="situacao" value="Incompleto" />
                Incompleto
            </label>
            <label class="radio-inline">
                <input type="radio" name="situacao" value="Cursando" />
                Cursando
            </label>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label for="ano">Qual Ano?</label>
            <input type="text" class="form-control" name="ano" placeholder="digite seu ano">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="digite seu email" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" name="login" placeholder="digite seu login" required>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="digite sua senha" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="nivel">Nível</label><br>
            <label class="radio-inline">
                <input type="radio" name="nivel" value="Operador" required/>
                Operador
            </label>
            <label class="radio-inline">
                <input type="radio" name="nivel" value="Administrador"  required />
                Administrador
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <button id="funcionario" name="funcionario" type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
        </div>
    </div>
</div>
</form>