
<form name="os" method="POST" action=" ">
<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label for="tecnico">Técnico</label>
            <input type="text" class="form-control" name="tecnico" placeholder="Digite o nome do técnico">
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label for="cliente">Cliente:</label>
            <select name="cliente" class="form-control" onchange="MM_jumpMenu('parent',this,0)" >
                <?php while($linha = mysql_fetch_array($dados)){ ?>
                <option value="add_os.php?id_cliente=<?php echo $linha['codigo']; ?>"> <?php echo $linha['nome']?> </option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
</div>
</form>