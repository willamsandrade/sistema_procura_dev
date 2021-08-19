<?php
    require_once "devLogado.php";
    require_once 'classes/DAO/Conexao.class.php';
    require_once 'classes/DAO/DevDAO.class.php';

    $DevDAO = new DevDAO();

    if( $DevDAO->deletar($_POST['idDev']) ){
        //Código para fazer logout do sistema
        unset($_SESSION['emailDev']);
        unset($_SESSION['senhaDev']);
        echo "<script>
               window.setTimeout(function() {
                  window.location.href = 'login.php';
               }, 0);
          </script>";
    }else{
        echo "<script>
                 window.setTimeout(function() {
                     window.location.href = 'restrito.php';
                  }, 0);
              </script>";
    }
