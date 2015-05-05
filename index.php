<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/head.php';?>
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/styles.css" rel="stylesheet">

<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/scripts.js"></script>
<body>

<?php include 'includes/navbar_menu.php';?>

    <div class="container-fluid">
          <div class="row row-offcanvas row-offcanvas-left">
              <?php include 'includes/navbar_lateral.php';?>
            <div class="col-sm-9 col-md-10 main">
              <h1 class="page-header">
                Principal
              </h1>

              <div class="row">
                  OS em aberto, ultimos clientes e etc
              </div>

              <hr>

              <h2 class="sub-header">OS em aberto</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
    </div>

</body>
<?php include 'includes/rodape.php'; ?>
</html>