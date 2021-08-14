<?php

    //Anexando arquivos
    require_once "classes/DAO/Conexao.class.php";
    require_once "classes/DAO/DevDAO.php";

    //Criando Objetos
    $DevDAO = new DevDAO();

    //Recuperando as liguagens do banco
    $langs = $DevDAO->buscar();

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
                    <div class="row">

                        <div class="col-md-6">
                            <div class="p-3">
                                <img src="img/cadastro.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-md-6">
                           <div class="formulario">
                                <h4 class="text-center">Cadastre-se</h4>
                                <form action="fim-cad-dev.php" method="POST">

                                    <div class="form-group">
                                        <label class="label">Nome</label>
                                        <input type="text" 
                                            class="form-control" 
                                            name="nomeDev" 
                                            id="nomeDev" 
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
                                            placeholder="Ex: Silva Andrade"
                                            required >
                                    </div>

                                    <div class="form-group mt-2">
                                        <label class="label">Email</label>
                                        <input type="email" 
                                            class="form-control" 
                                            name="emailDev" 
                                            id="emailDev" 
                                            placeholder="Ex: dev@demo.com"
                                            required >
                                    </div>

                                    <div class="form-group mt-2">
                                        <label class="label">Senha</label>
                                        <input type="password" 
                                            class="form-control" 
                                            name="senhaDev" 
                                            id="senhaDev" 
                                            placeholder="Ex: Willams"
                                            required >
                                    </div>

                                    <div class="form-group mt-2">
                                        <label class="label">Github</label>
                                        <input type="text" 
                                            class="form-control" 
                                            name="githubDev" 
                                            id="githubDev" 
                                            placeholder="Ex: willamsandrade"
                                            required >
                                    </div>

                                    <div class="form-group mt-2">
                                        <label class="label mb-1">
                                            Qual linguagem você programa?
                                            <a href="#" class="btn btn-primary btn-sm">
                                                Adicionar Programa
                                            </a>
                                        </label>
                                        <select type="text" class="form-control" name="idLang" id="idLang" required>
                                            <option value="">
                                                -- Selecione uma Linguagem --
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

                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-success">
                                            <i class="uil uil-plus-circle"></i> CADASTRAR
                                        </button>
                                    </div>


                                </form>    
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