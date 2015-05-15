<form name="cliente" method="POST" action=" ">
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="digite seu nome" required>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" data-mask="999.999.999-99" placeholder="digite seu CPF" required>
            </div>
        </div>
         <div class="col-xs-3">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="digite seu email" required>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xs-3">
            <div class="form-group">
                <label for="fone_com">Fone Comercial</label>
                <input type="text" class="form-control" name="fone_com" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="fone_res">Fone Residencial</label>
                <input type="text" class="form-control" name="fone_res" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name="celular" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX">
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

    </div>

    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <button id="cliente" name="cliente" type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                <a class="btn btn-info btn-lg" href="../cliente">Voltar</a>
            </div>
        </div>
    </div>
</form>