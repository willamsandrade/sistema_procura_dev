<?php
    session_start();
    //Código para fazer logout do sistema
    unset($_SESSION['emailDev']);
    unset($_SESSION['senhaDev']);
    echo "<script>
               window.setTimeout(function() {
                  window.location.href = 'login.php';
               }, 0);
          </script>";
    exit;

