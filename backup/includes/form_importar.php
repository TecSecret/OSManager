<div class="row">
    <form enctype="multipart/form-data" name="importar_cliente" method="POST" action=" ">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Cliente</div>
                <div class="panel-body">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Selecionar .XML do Cliente</span><span class="fileinput-exists">Mudar</span><input type="file" name="xmlcliente"></span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                    </div>
                    <div class="form-group" align="right">
                        <button id="importar_cliente" name="importar_cliente" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-upload"></i> Importar </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row">
    <form enctype="multipart/form-data" name="importar_funcionario" method="POST" action=" ">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Funcionário</div>
                <div class="panel-body">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Selecionar .XML do Funcionário</span><span class="fileinput-exists">Mudar</span><input type="file" name="xmlfuncionario"></span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                    </div>
                    <div class="form-group" align="right">
                        <button id="importar_cliente" name="importar_funcionario" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-upload"></i> Importar </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="row">
    <form enctype="multipart/form-data" name="importar_os" method="POST" action=" ">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Ordem de Serviço</div>
                <div class="panel-body">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Selecionar .XML da OS</span><span class="fileinput-exists">Mudar</span><input type="file" name="xmlos"></span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                    </div>
                    <div class="form-group" align="right">
                        <button id="importar_os" name="importar_os" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-upload"></i> Importar </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!---->
<!--<form enctype="multipart/form-data" name="importar_cliente" method="POST" action=" ">-->
<!--    <div class="row">-->
<!--        <div class="col-xs-6">-->
<!--            <div class="form-group">-->
<!--                <label for="xmlcliente">Enviar .XML de Cliente</label>-->
<!--                <input type="file" class="form-control" name="xmlcliente" placeholder="Selecione o arquivo">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-xs-3">-->
<!--            <div class="form-group">-->
<!--                <button id="importar_cliente" name="importar_cliente" type="submit" class="btn btn-primary btn-lg">Enviar</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->