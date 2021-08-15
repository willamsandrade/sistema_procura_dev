<?php

//Anexando arquivos
require_once "classes/DAO/Conexao.class.php";
require_once "classes/DAO/LangDAO.class.php";
require_once "classes/entidades/Lang.class.php";

//Criando Objetos
$Lang = new Lang();
$LangDAO = new LangDAO();

//Recuperando dados do formulário
$Lang->setIdLang($_POST['idLang']);
$Lang->setDescLang($_POST['descLang']);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastrar Linguagem</title>
    <!-- Incluir configurações e metatags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--==================== BOOTSTRAP ====================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
          crossorigin="anonymous">
    <!--==================== CSS SISTEMA ====================-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fim Incluir configurações e metatags -->
</head>
<body>

<div class="container">

    <main class="cadastro mt-3">
        <div class="p-5">

            <?php
            if( $LangDAO->deletar($Lang) ){
                ?>
                <div class="text-center">
                    <img src="img/check.png" class="img-fluid">
                    <br>
                    <h3 class="text-success">Linguagem excluida com sucesso</h3>
                </div>
            <?php }else{ ?>
                <div class="text-center mw-30">
                    <img src="img/error01.gif" width="250">
                    <br>
                    <h3 class="text-danger">Linguagem não excluida, está sendo usada com um dev</h3>
                </div>
            <?php } ?>

        </div>
    </main>

    <footer class="action text-center">
        <a href="lista-lang.php">
            <i class="uil uil-arrow-circle-left"></i>Voltar
        </a>
    </footer>

</div>

<!--==================== JAVASCRIPT ====================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>
</html>

