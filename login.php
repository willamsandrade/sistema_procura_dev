<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login</title>
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
            <div class="row">

                <div class="col-md-6">
                    <div class="p-3">
                        <img src="img/login.png" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="formulario">
                        <h4 class="text-center mb-5">Login</h4>

                        <?php
                            if(isset($_GET['erro'])){
                        ?>
                                <div class="alert alert-danger" role="alert">
                                    <i class="uil uil-exclamation-octagon"></i>
                                    Email ou senha incorreto
                                </div>
                        <?php } ?>

                        <form action="logar.php" method="POST">

                            <div class="form-group">
                                <label class="label">Email</label>
                                <input type="email"
                                       class="form-control"
                                       name="emailDev"
                                       id="emailDev"
                                       placeholder="demo@demo.com"
                                       required >
                            </div>

                            <div class="form-group mt-1">
                                <label class="label">Senha</label>
                                <input type="password"
                                       class="form-control"
                                       name="senhaDev"
                                       id="senhaDev"
                                       placeholder="****"
                                       required >
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="uil uil-unlock-alt"></i> ENTRAR
                                </button>
                            </div>

                        </form>

                        <hr />

                        <div class="d-grid gap-2 mt-5 mb-5">
                            <a href="cad-dev.php"
                               class="btn btn-outline-primary">
                                <i class="uil uil-plus-circle"></i> Criar Conta
                            </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </main>

    <footer class="action text-center">
        <a href="index.php">
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

