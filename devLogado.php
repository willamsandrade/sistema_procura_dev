<?php
session_start();
if(!isset($_SESSION['emailDev']) and !isset($_SESSION['senhaDev'])){
    echo "<meta http-equiv='refresh' content='0; URL=login.php'>";
    exit;
}

require_once 'classes/DAO/Conexao.class.php';
require_once 'classes/DAO/DevDAO.class.php';
$DevDAO = new DevDAO();
$dev = $DevDAO->dadosDevEmail($_SESSION['emailDev']);

foreach ($dev as $u) {
    $idDev = $u["idDev"];
    $nomeDev = $u["nomeDev"];
    $sobreDev= $u["sobreDev"];
    $idLang = $u['idLang'];
    $descLang = $u['descLang'];
}

//Dados do DEV
define("ID_DEV", $idDev);
define("NOME_DEV", $nomeDev);
define("SOBRE_DEV", $sobreDev);
define("EMAIL_DEV", $_SESSION['emailDev']);
define("ID_LANG", $idLang);
define("DESC_LANG", $descLang);