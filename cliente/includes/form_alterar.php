<form name="cliente" method="POST" action=" ">
<div class="row">
<input type="hidden" name="id" value="<?php echo $cliente['codigo']; ?>">
    <div class="col-xs-6">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="digite seu nome" value="<?php echo $cliente["nome"]; ?>">
        </div>
    </div>
	<div class="col-xs-3">
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" data-mask="999.999.999-99" placeholder="digite seu CPF" value="<?php echo $cliente["cpf"]; ?>">
        </div>
    </div>
	 <div class="col-xs-3">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="digite seu email" value="<?php echo $cliente["email"]; ?>">
        </div>
    </div>
	</div>
	<div class="row">
   
	<div class="col-xs-3">
        <div class="form-group">
            <label for="fone_com">Fone Comercial</label>
            <input type="text" class="form-control" name="fone_com" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX" value="<?php echo $cliente["fone_com"]; ?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="fone_res">Fone Residencial</label>
            <input type="text" class="form-control" name="fone_res" data-mask="(99)9999-9999" placeholder="(XX)XXXX-XXXX" value="<?php echo $cliente["fone_res"]; ?>">
        </div>
    </div>    
</div>
<div class="row">

    <div class="col-xs-6">
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="digite seu endereco" value="<?php echo $cliente["endereco"]; ?>">
        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="digite seu cidade" value="<?php echo $cliente["cidade"]; ?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="digite seu bairro" value="<?php echo $cliente["bairro"]; ?>">
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xs-2">
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" class="form-control">
                <option value="RJ" <?php if ($cliente["estado"]== "RJ") echo "selected"; ?> >Rio de Janeiro</option>
                <option value="AC" <?php if ($cliente["estado"]== "AC") echo "selected"; ?>>Acre</option>
                <option value="AL" <?php if ($cliente["estado"]== "AL") echo "selected"; ?>>Alagoas</option>
                <option value="AP" <?php if ($cliente["estado"]== "AP") echo "selected"; ?>>Amap&aacute;</option>
                <option value="AM" <?php if ($cliente["estado"]== "AM") echo "selected"; ?>>Amazonas</option>
                <option value="BA" <?php if ($cliente["estado"]== "BA") echo "selected"; ?>>Bahia</option>
                <option value="CE" <?php if ($cliente["estado"]== "CE") echo "selected"; ?>>Cear&aacute;</option>
                <option value="DF" <?php if ($cliente["estado"]== "DF") echo "selected"; ?>>Distrito Federal</option>
                <option value="ES" <?php if ($cliente["estado"]== "ES") echo "selected"; ?>>Esp&iacute;rito Santo</option>
                <option value="GO" <?php if ($cliente["estado"]== "GO") echo "selected"; ?>>Goi&aacute;s</option>
                <option value="MA" <?php if ($cliente["estado"]== "MA") echo "selected"; ?>>Maranh&atilde;o</option>
                <option value="MT" <?php if ($cliente["estado"]== "MT") echo "selected"; ?>>Mato Grosso</option>
                <option value="MS" <?php if ($cliente["estado"]== "MS") echo "selected"; ?>>Mato Grosso do Sul</option>
                <option value="MG" <?php if ($cliente["estado"]== "MG") echo "selected"; ?>>Minas Gerais</option>
                <option value="PA" <?php if ($cliente["estado"]== "PA") echo "selected"; ?>>Par&aacute;</option>
                <option value="PB" <?php if ($cliente["estado"]== "PB") echo "selected"; ?>>Para&iacute;ba</option>
                <option value="PR" <?php if ($cliente["estado"]== "PR") echo "selected"; ?>>Paran&aacute;</option>
                <option value="PE" <?php if ($cliente["estado"]== "PE") echo "selected"; ?>>Pernambuco</option>
                <option value="PI" <?php if ($cliente["estado"]== "PI") echo "selected"; ?>>Piau&iacute;</option>
                <option value="RN" <?php if ($cliente["estado"]== "RN") echo "selected"; ?>>Rio Grande do Norte</option>
                <option value="RS" <?php if ($cliente["estado"]== "RS") echo "selected"; ?>>Rio Grande do Sul</option>
                <option value="RO" <?php if ($cliente["estado"]== "RO") echo "selected"; ?>>Rond&ocirc;nia</option>
                <option value="RR" <?php if ($cliente["estado"]== "RR)") echo "selected"; ?>>Roraima</option>
                <option value="SC" <?php if ($cliente["estado"]== "SC") echo "selected"; ?>>Santa Catarina</option>
                <option value="SP" <?php if ($cliente["estado"]== "SP") echo "selected"; ?>>S&atilde;o Paulo</option>
                <option value="SE" <?php if ($cliente["estado"]== "SE") echo "selected"; ?>>Sergipe</option>
                <option value="TO" <?php if ($cliente["estado"]== "TO") echo "selected"; ?>>Tocantins</option>
            </select>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label for="CEP">CEP</label>
            <input type="text" class="form-control" name="CEP" data-mask="99999-999" placeholder="00000-000" value="<?php echo $cliente["cep"]; ?>">
        </div>
    </div>
    
    

</div>
<div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <button id="cliente" name="cliente" type="submit" class="btn btn-primary btn-lg">Editar</button>
        </div>
    </div>
</div>
</form>