<?php

//Anexando arquivos
require_once "classes/DAO/Conexao.class.php";
require_once "classes/DAO/LangDAO.class.php";

//Criando Objetos
$LangDAO = new LangDAO();

//Recuperando as liguagens do banco
$langs = $LangDAO->buscar();

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Lista de Linguagens</title>
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
                        <img src="img/lista.png" />
                    </div>

                    <hr />

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Linguagem</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($langs as $l){ ?>
                            <tr>
                                <td><?php echo $l['descLang']; ?></td>
                                <td>
                                    <a href="edit-lang.php?idLang=<?php echo $l['idLang']; ?>"
                                       class="btn btn-primary btn-sm">
                                        <i class="uil uil-edit-alt"></i> Editar
                                    </a>
                                    <button type="button"
                                            class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            data-bs-whatever="<?php echo $l['idLang']; ?>"
                                            data-bs-whateverdesc="<?php echo $l['descLang']; ?>"
                                            data-bs-toggle="modal">
                                        <i class="uil uil-trash-alt"></i> Excluir
                                    </button>
                                    <a href="lista-devs.php?idLang=<?php echo $l['idLang'] ?>"
                                       class="btn btn-secondary btn-sm">
                                        <i class="uil uil-search-alt"></i> Achar Dev
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Linguagem</th>
                            <th>Ações</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </main>

            <footer class="action text-center">
                <a href="cad-lang.php">
                    <i class="uil uil-arrow-circle-left"></i>Voltar
                </a>
            </footer>

        </div>


        <!-- Modal para exclusão da linguagem -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="fim-del-lang.php" method="post">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Id Linguagem</label>
                                <input type="text"
                                       name="idLang"
                                       class="form-control"
                                       id="idLang"
                                       readonly>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Linguagem</label>
                                <input type="text"
                                       name="descLang"
                                       class="form-control"
                                       id="descLang"
                                       readonly>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit"
                                        class="btn btn-danger">Excluir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal para exclusão da linguagem -->

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
        <script type="text/javascript">
            var exampleModal = document.getElementById('exampleModal')
            exampleModal.addEventListener('show.bs.modal', function (event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var recipient = button.getAttribute('data-bs-whatever')
                var recipientDesc = button.getAttribute('data-bs-whateverdesc')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var modalTitle = exampleModal.querySelector('.modal-title')
                var modalBodyInput = exampleModal.querySelector('.modal-body input')

                modalTitle.textContent = 'Excluir linguagem ' + recipientDesc
                modalBodyInput.value = recipientDesc

                var modal = $(this)
                modal.find('#idLang').val(recipient)
                modal.find('#descLang').val(recipientDesc)
            })

        </script>
    </body>
</html>

