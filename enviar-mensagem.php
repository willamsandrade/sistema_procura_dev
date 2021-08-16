<?php

//Anexando arquivos
require_once "classes/DAO/Conexao.class.php";
require_once "classes/DAO/DevDAO.class.php";
require_once "classes/entidades/Dev.class.php";

//Criando Objetos
$Dev = new Dev();
$DevDAO = new DevDAO();

//Recuperando as liguagens do banco
$dados = $DevDAO->dadosDev($_GET['idDev']);

foreach ($dados as $d){
    $Dev->setNomeDev($d['nomeDev']);
    $Dev->setSobreDev($d['sobreDev']);
    $Dev->setEmailDev($d['nomeDev']);
    $Dev->setSenhaDev($d['senhaDev']);
    $Dev->setGithubDev($d['githubDev']);
    $Dev->setIdLang($d['idLang']);
    $descLang =  $d['descLang'];
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Enviar Mensagem</title>
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
        <div class="p-1">
            <div class="row">

                <div class="col-md-6">
                    <div class="p-3">
                        <img src="img/mensagem.png" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="formulario">
                        <h4 class="text-center">Mensagem para o Dev</h4>

                        <p>
                            <i class="uil uil-arrow"></i> Fale com o <span class="text-success">
                                Dev.
                            </span>
                            <strong>
                                <?php echo $Dev->getNomeDev() ." ". $Dev->getSobreDev(); ?>
                            </strong>
                            <br />
                            Especialista em
                            <strong>
                                <span class="text-success text-bold">
                                    <?php echo $descLang; ?>
                                </span>
                            </strong>
                        </p>

                        <form action="mensagem-enviada.php" method="POST">

                            <div class="form-group">
                                <label class="label">Seu nome</label>
                                <input type="text"
                                       class="form-control"
                                       name="nomeMensagem"
                                       id="nomeMensagem"
                                       placeholder="Ex: Willams"
                                       maxlength="25"
                                       required >
                            </div>

                            <div class="form-group mt-2">
                                <label class="label">Seu Email</label>
                                <input type="email"
                                       class="form-control"
                                       name="emailMensagem"
                                       id="emailMensagem"
                                       placeholder="Ex: demo@demo.com"
                                       required >
                            </div>

                            <div class="form-group mt-2">
                                <label class="label">Seu Whatsapp</label>
                                <input type="text"
                                       class="form-control"
                                       name="whatsappMensagem"
                                       id="whatsappMensagem"
                                       placeholder="(00) 00000-0000"
                                       data-mask="(00) 00000-0000"
                                       required >
                            </div>

                            <div class="form-group mt-2">
                                <label class="label">Sua mensagem para o dev</label>
                                <textarea
                                        name="mensagem"
                                        class="form-control"
                                        placeholder="Digite sua mensagem..."
                                ></textarea>
                            </div>

                            <input type="hidden" name="controleMensagem" value="<?php echo time(); ?>">
                            <input type="hidden" name="idDev" value="<?php echo $_GET['idDev']; ?>">


                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success">
                                    <i class="uil uil-comment-lines"></i> Enviar
                                </button>
                            </div>


                        </form>
                    </div>
                </div>


            </div>
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
<script src="https://unpkg.com/imask"></script>
<script type="text/javascript">
    var phoneMask = IMask(
        document.getElementById('whatsappMensagem'), {
            mask: '(00) 00000-0000'
        });
</script>
</body>
</html>