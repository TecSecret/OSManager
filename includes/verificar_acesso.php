<?php
if (!isset($_SESSION)) {
    session_start();
}



function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) {
    $isValid = False;

    if (!empty($UserName)) {
        $arrUsers = Explode(",", $strUsers);
        $arrGroups = Explode(",", $strGroups);
        if (in_array($UserName, $arrUsers)) {
            $isValid = true;
        }
        // Or, you may restrict access to only certain users based on their username.
        if (in_array($UserGroup, $arrGroups)) {
            $isValid = true;
        }

    }
    return $isValid;
}


if (!((isset($_SESSION['login'])) && (isAuthorized("",$nivel_autorizado, $_SESSION['login'], $_SESSION['nivel'])))) {
    $MM_qsChar = "?";
    $MM_referrer = $_SERVER['PHP_SELF'];
    if (strpos($redirecionar_login, "?")) $MM_qsChar = "&";
    if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0)
        $MM_referrer .= "?" . $QUERY_STRING;
    $redirecionar_login = $redirecionar_login. $MM_qsChar . "checar_acesso=" . urlencode($MM_referrer);
    header("Location: ". $redirecionar_login);
    exit;
}