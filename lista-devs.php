<?php

//Anexando arquivos
require_once "classes/DAO/Conexao.class.php";
require_once "classes/DAO/DevDAO.class.php";

//Criando Objetos
$DevDAO = new DevDAO();

//Recebendo consulta por linguagem
if(isset($_GET['idLang'])){
    $devs = $DevDAO->buscarDevs($_GET['idLang']);
}else{
    $devs = $DevDAO->buscarDevs();
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Lista de Devs</title>
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

    <main class="cadastro mt-3">
        <div class="p-1">

            <div class="text-center mb-2">
                <img src="img/devs.png" />
            </div>

            <hr />

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Linguagem</th>
                    <th>email</th>
                    <th>Github</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($devs as $d){ ?>
                    <tr>
                        <td><?php echo $d['nomeDev'] . " " . $d['sobreDev']; ?></td>
                        <td><?php echo $d['descLang']; ?></td>
                        <td><?php echo $d['emailDev']; ?></td>
                        <td>
                            <a href="https://github.com/<?php echo $d['githubDev']; ?>"
                               target="_blank">
                                <i class="uil uil-github"></i><?php echo $d['githubDev']; ?>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-secondary btn-sm">
                                <i class="uil uil-comment-lines"></i> Falar com Dev
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>Linguagem</th>
                    <th>email</th>
                    <th>Github</th>
                    <th>Ações</th>
                </tr>
                </tfoot>
            </table>
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
<script type="text/javascript"
        charset="utf8"
        src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"
        charset="utf8"
        src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
        charset="utf8"
        src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script text="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#example').DataTable( {
        language: {
            processing:     "Tratamento em curso...",
            search:         "Pesquisar",
            lengthMenu:    "Mostrar _MENU_ elementos",
            info:           "Exibição de item _START_ de _END_ em _TOTAL_ elementos",
            infoEmpty:      "Exibição de item 0 de 0 em 0 elementos",
            infoFiltered:   "(filtrado por _MAX_ itens no total)",
            infoPostFix:    "",
            loadingRecords: "Carregando...",
            zeroRecords:    "Nenhum resultado encontrado",
            emptyTable:     "Sem dados disponíveis na tabela",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Próximo",
                last:       "Durar"
            },
            aria: {
                sortAscending:  ": ative para classificar a coluna em ordem crescente",
                sortDescending: ": ative para classificar a coluna em ordem decrescente"
            }
        }
    } );
</script>
</body>
</html>


