<?php
    require_once 'classes/DAO/Conexao.class.php';
    require_once 'classes/DAO/DevDAO.class.php';
    $DevDAO = new DevDAO();

    function protecao($string_to_escape){
        $string_to_escape = trim($string_to_escape);
        $string_to_escape = htmlspecialchars($string_to_escape);
        $string_to_escape = addslashes($string_to_escape);

        return $string_to_escape;
    }

    $emailDev = protecao($_POST["emailDev"]);
    $senhaDev = protecao($_POST["senhaDev"]);


    if($DevDAO->logar($emailDev, $senhaDev)){
        session_start();
        $_SESSION["emailDev"] = $emailDev;
        $_SESSION["senhaDev"] = $senhaDev;
        echo "<script>
                 window.setTimeout(function() {
                     window.location.href = 'restrito.php';
                  }, 0);
              </script>";
        exit;
    }else{
        echo "<meta http-equiv='refresh' content='0; URL=login.php?erro=true'>";
    }
