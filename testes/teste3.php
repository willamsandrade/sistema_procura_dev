<?php 
    require_once "../classes/DAO/Conexao.class.php";
    require_once "../classes/DAO/MensagemDAO.class.php";
    require_once "../classes/entidades/Mensagem.class.php";

    $MensagemDAO = new MensagemDAO();
    $Mensagem = new Mensagem();

    $Mensagem->setIdDev(86);
    $Mensagem->setNomeMensagem('Willams');
    $Mensagem->setEmailMensagem('teste@teste.com');
    $Mensagem->setWhatsappMensagem('74999999999');
    $Mensagem->setMensagem('Olá Mensa$Mensagem!!! Quero um serviço seu');
    $Mensagem->setStatusMensagem(0);
    $Mensagem->setControleMensagem('OK');

    $MensagemDAO->inserir($Mensagem);

    echo "Testes na classe Mensagens<br>";
    echo "<hr>";
    echo "Acessando e recuperando dados com os métodos set e get<br>";

    echo"<strong> Id: </strong><code>" . $Mensagem->getIdDev() . "</code><br>";
    echo"<strong> Nome: </strong><code>" . $Mensagem->getNomeMensagem() . "</code><br>";
    echo"<strong> Nome: </strong><code>" . $Mensagem->getWhatsappMensagem() . "</code><br>";
    echo"<strong> Nome: </strong><code>" . $Mensagem->getMensagem() . "</code><br>";
    echo"<strong> Nome: </strong><code>" . $Mensagem->getStatusMensagem() . "</code><br>";
    echo"<strong> Nome: </strong><code>" . $Mensagem->getControleMensagem() . "</code><br>";

    echo"Testes de backend finalizados<br>";