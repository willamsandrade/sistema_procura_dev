<?php
    //Anexando arquivos
    require_once "classes/DAO/Conexao.class.php";
    require_once "classes/DAO/MensagemDAO.php";
    require_once "classes/entidades/Mensagem.class.php";

    //Criar Objetos
    $MensagemDAO = new MensagemDAO();
    $Mensagem = new Mensagem();

    //Recuperar Dados do Formulário
    $Mensagem->setIdDev($_POST['idDev']);
    $Mensagem->setNomeMensagem($_POST['nomeMensagem']);
    $Mensagem->setEmailMensagem($_POST['emailMensagem']);
    $Mensagem->setWhatsappMensagem($_POST['whatsappMensagem']);
    $Mensagem->setMensagem($_POST['mensagem']);
    $Mensagem->setControleMensagem($_POST['controleMensagem']);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastrar Dev</title>
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
            if( $MensagemDAO->inserir($Mensagem) ){
                ?>
                <div class="text-center">
                    <img src="img/check.png" class="img-fluid">
                    <br>
                    <h3 class="text-success">Mensagem enviada com sucesso</h3>
                </div>
            <?php }else{ ?>
                <div class="text-center mw-30">
                    <img src="img/error01.gif" width="250">
                    <br>
                    <h3 class="text-danger">Não é possível mais enviar mensagem</h3>
                </div>
            <?php } ?>

        </div>
    </main>

    <footer class="action text-center">
        <a href="lista-devs.php">
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
