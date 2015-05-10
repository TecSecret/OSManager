<?php
session_start();
session_destroy();
session_unset();
//echo "<script>alert('Você saiu!');top.location.href='alguma pagina.html';</script>";
header("location: index.php");