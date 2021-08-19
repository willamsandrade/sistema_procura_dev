<?php
//Proteção e dados do dev
require_once "devLogado.php";
//Anexando arquivos
require_once "classes/DAO/Conexao.class.php";
require_once "classes/DAO/DevDAO.class.php";
require_once "classes/entidades/Dev.class.php";

//Criando Objetos
$DevDAO = new DevDAO();
$Dev = new Dev();

//Se o usuário for editar
if(isset($_GET['edit'])){
    $Dev->setIdDev($_POST['idDev']);
    $Dev->setNomeDev($_POST['nomeDev']);
    $Dev->setSobreDev($_POST['sobreDev']);
    $Dev->setEmailDev($_POST['emailDev']);
    $Dev->setGithubDev($_POST['githubDev']);
    $Dev->setIdLang($_POST['idLang']);
    if( $DevDAO->atualizar($Dev) ){
        $_SESSION["emailDev"] = $Dev->getEmailDev();
        $feed = "Cadastro atualizado com sucesso";
        $tipo = "alert-success";
    }else{
        $feed = "Erro!! Cadastro não atualizado ou email já existe!!";
        $tipo = "alert-danger";
    }
}

//Se o usuário modificar senha
if(isset($_GET['senha'])){
    $Dev->setIdDev($_POST['idDev']);
    $Dev->setSenhaDev($_POST['senhaDev']);
    if( $DevDAO->modificarSenha($Dev) ){
        $_SESSION["senhaDev"] = $Dev->getSenhaDev();
        $feed = "Senha, alterada com sucesso";
        $tipo = "alert-success";
    }else{
        $feed = "Não foi possível alterar senha!!";
        $tipo = "alert-danger";
    }
}

//Recuperando dados do Dev
$perfil = $DevDAO->dadosDev(ID_DEV);
foreach ($perfil as $p){
    $Dev->setNomeDev($p['nomeDev']);
    $Dev->setSobreDev($p['sobreDev']);
    $Dev->setEmailDev($p['emailDev']);
    $Dev->setGithubDev($p['githubDev']);
    $Dev->setIdLang($p['idLang']);
    $descLang = $p['descLang'];
}

$langs = $DevDAO->buscar($Dev->getIdLang());


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
        <div class="p-1">

            <h1 class="text-center">Meu Perfil</h1>

            <?php if(isset($_GET['edit']) || isset($_GET['senha'])){ ?>
                <div class="alert <?php echo $tipo; ?>" role="alert">
                    <?php echo $feed; ?>
                </div>
            <?php } ?>

            <div class="row">

                <div class="col-md-6">
                    <div class="formulario">

                        <form action="meu-perfil.php?edit=ok" method="POST">

                            <div class="form-group">
                                <label class="label">Nome</label>
                                <input type="text"
                                       class="form-control"
                                       name="nomeDev"
                                       id="nomeDev"
                                       value="<?php echo $Dev->getNomeDev(); ?>"
                                       placeholder="Ex: Willams"
                                       maxlength="25"
                                       required >
                            </div>

                            <div class="form-group mt-2">
                                <label class="label">Sobrenome</label>
                                <input type="text"
                                       class="form-control"
                                       name="sobreDev"
                                       id="sobreDev"
                                       value="<?php echo $Dev->getSobreDev(); ?>"
                                       placeholder="Ex: Silva Andrade"
                                       required >
                            </div>

                            <div class="form-group mt-2">
                                <label class="label">Email</label>
                                <input type="email"
                                       class="form-control"
                                       name="emailDev"
                                       value="<?php echo $Dev->getEmailDev(); ?>"
                                       id="emailDev"
                                       placeholder="Ex: dev@demo.com"
                                       required >
                            </div>

                            <div class="form-group mt-2">
                                <label class="label">Github</label>
                                <input type="text"
                                       class="form-control"
                                       name="githubDev"
                                       id="githubDev"
                                       value="<?php echo $Dev->getGithubDev(); ?>"
                                       placeholder="Ex: willamsandrade"
                                       required >
                            </div>

                            <div class="form-group mt-2">
                                <label class="label mb-1">
                                    Qual linguagem você programa?
                                </label>
                                <select type="text" class="form-control" name="idLang" id="idLang" required>
                                    <option value="<?php echo $Dev->getIdLang(); ?>">
                                        <?php echo $descLang; ?>
                                    </option>
                                    <?php
                                    foreach ($langs as $l) {
                                        ?>
                                        <option value="<?php echo $l['idLang']; ?>">
                                            <?php echo $l['descLang']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <input type="hidden" name="idDev" value="<?php echo ID_DEV; ?>">

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="uil uil-edit-alt"></i> EDITAR
                                </button>
                            </div>


                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3">

                        <h4 class="text-dark">Alterar Senha</h4>

                        <form action="meu-perfil.php?senha=ok" method="POST">
                            <div class="form-group mt-2">
                                <label class="label">Nova Senha</label>
                                <input type="password"
                                       class="form-control"
                                       name="senhaDev"
                                       id="senhaDev"
                                       placeholder="******"
                                       required >
                            </div>

                            <input type="hidden" name="idDev" value="<?php echo ID_DEV; ?>">

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="uil uil-key-skeleton"></i> MUDAR SENHA
                                </button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </main>

    <br />

    <footer class="action text-center">
        <a href="restrito.php">
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
