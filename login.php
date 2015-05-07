<?php
if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
    {
        $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

        $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

        switch ($theType) {
            case "text":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "long":
            case "int":
                $theValue = ($theValue != "") ? intval($theValue) : "NULL";
                break;
            case "double":
                $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
                break;
            case "date":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "defined":
                $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }
}
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['checar_acesso'])) {
    $_SESSION['url_antiga'] = $_GET['checar_acesso'];
}

if (isset($_POST['form-login'])) {
    $login=$_POST['login'];
    $senha=$_POST['senha'];
    $urlSucesso = "index.php";
    $urlFalha = "login.php";

    include('conexao/data.php');
    $sql=sprintf("SELECT login, senha, nivel FROM funcionario WHERE login=%s AND senha=%s",
        GetSQLValueString($login, "text"),
        GetSQLValueString($senha, "text"));

    $funcionarioRS = mysql_query($sql, $data) or die(mysql_error());
    $numero_funcionarios = mysql_num_rows($funcionarioRS);
    if ($numero_funcionarios) {
        $funcionario_nivel  = mysql_result($funcionarioRS,0,'nivel');
        $_SESSION['login'] = $login;
        $_SESSION['nivel'] = $funcionario_nivel;

        if (isset($_SESSION['url_antiga'])) {
            $urlSucesso = $_SESSION['url_antiga'];
        }
        header("Location: " . $urlSucesso );
    }
    else {
        header("Location: ". $urlFalha );
    }
}
?>
<html>
    <head>
        <title>Realizar Login</title>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/styles.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/scripts.js"></script>
    </head>
    <body>
        <div class="container">
            <form class="form-signin" name="form-login" method="POST">
                <h2 class="form-signin-heading">Login:</h2>
                <label for="login" class="sr-only">Email</label>
                <input type="text" name="login" class="form-control" placeholder="digite seu login" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="digite sua senha" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="form-login">Confirmar</button>
            </form>
        </div>
    </body>
</html>