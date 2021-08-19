<?php
    //Proteção e dados do dev
    require_once "devLogado.php";
    require_once "classes/DAO/MensagemDAO.php";

    //Criar Objeto
    $MensagemDAO = new MensagemDAO();

    //Ver quantidade de novas mensagens
    $qtdMensagens = $MensagemDAO->qtdNovasMensagens(ID_DEV);
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
        <img src="img/procura-dev.png" />
        <h2>
            Olá dev
            <strong class="text-primary">
                <?php echo NOME_DEV . " " . SOBRE_DEV; ?>
            </strong>
        </h2>
        <?php if($qtdMensagens > 0){ ?>
            <a href="minhas-mensagens.php" class="btn btn-primary position-relative">
                <?php echo $qtdMensagens > 1 ? "Novas Mensagens" : "Nova Mensagem"; ?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php echo $qtdMensagens; ?>
                <span class="visually-hidden">
                    Mensagens
                </span>
            </span>
            </a>
        <?php } ?>
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
                        <a href="meu-perfil.php"
                           class="btn btn-outline-primary">
                            <i class="uil uil-chat-bubble-user icon-restrito"></i>
                            <br />
                            MEU PERFIL
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 mt-5 mb-5">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                           class="btn btn-outline-primary">
                            <i class="uil uil-times-square icon-restrito"></i>
                            <br />
                            REMOVER CONTA
                        </button>
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

<!-- Modal Excluir -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir Conta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Olá, <?php echo NOME_DEV . " " . SOBRE_DEV; ?>.
                Após clicar no botão excluir conta, não será
                possível recuperar seus dados.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>
                <form action="deletar-conta.php" method="post">
                    <input type="hidden" name="idDev" value="<?php echo ID_DEV; ?>">
                    <button type="submit" class="btn btn-danger">
                        Excluir Conta
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--==================== JAVASCRIPT ====================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>
</html>


