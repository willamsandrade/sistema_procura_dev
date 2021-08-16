<?php
    //Proteção e dados do dev
    require_once "devLogado.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Área do Dev</title>
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
    <!--==================== Datatables ====================-->
    <link rel="stylesheet"
          type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          type="text/css"
          href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <!-- Fim Incluir configurações e metatags -->
</head>
<body>

<div class="container">

    <header class="mt-5 text-center">
        <img src="img/procura-dev.png">
        <h2>
            Olá dev
            <strong class="text-primary">
                <?php echo NOME_DEV . " " . SOBRE_DEV; ?>
            </strong>
        </h2>
    </header>

    <main class="mt-3">
        <div class="p-1">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-grid gap-2 mt-5 mb-5">
                        <a href="minhas-mensagens.php"
                           class="btn btn-outline-primary">
                            <i class="uil uil-comment-lines icon-restrito"></i>
                            <br />
                            MINHAS MENSAGENS
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 mt-5 mb-5">
                        <a href="#"
                           class="btn btn-outline-primary">
                            <i class="uil uil-chat-bubble-user icon-restrito"></i>
                            <br />
                            MEU PERFIL
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 mt-5 mb-5">
                        <a href="#"
                           class="btn btn-outline-primary">
                            <i class="uil uil-times-square icon-restrito"></i>
                            <br />
                            REMOVER CONTA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="action text-center">
        <a href="logout.php">
            <i class="uil uil-sign-out-alt"></i> Sair
        </a>
    </footer>

</div>

<!--==================== JAVASCRIPT ====================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>
</html>


