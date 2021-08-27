<?php

/*
 * Classe utilizada para manipulação de dados
 * das mensagens para os devs
 */

class Mensagem{
    private $idMensagem;
    private $idDev;
    private $nomeMensagem;
    private $emailMensagem;
    private $whatsappMensagem;
    private $mensagem;
    private $statusMensagem;
    private $controleMensagem;

    public function getIdMensagem(){
        return $this->idMensagem;
    }

    public function setIdMensagem($idMensagem){
        $this->idMensagem = $idMensagem;
    }

    public function getIdDev(){
        return $this->idDev;
    }

    public function setIdDev($idDev){
        $this->idDev = $idDev;
    }

    public function getNomeMensagem(){
        return $this->nomeMensagem;
    }

    public function setNomeMensagem($nomeMensagem){
        $this->nomeMensagem = $nomeMensagem;
    }

    public function getEmailMensagem(){
        return $this->emailMensagem;
    }

    public function setEmailMensagem($emailMensagem){
        $this->emailMensagem = $emailMensagem;
    }

    public function getWhatsappMensagem(){
        return $this->whatsappMensagem;
    }

    public function setWhatsappMensagem($whatsappMensagem){
        $this->whatsappMensagem = $whatsappMensagem;
    }

    public function getMensagem(){
        return $this->mensagem;
    }

    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }

    public function getStatusMensagem(){
        return $this->statusMensagem;
    }

    public function setStatusMensagem($statusMensagem){
        $this->statusMensagem = $statusMensagem;
    }

    public function getControleMensagem(){
        return $this->controleMensagem;
    }

    public function setControleMensagem($controleMensagem){
        $this->controleMensagem = $controleMensagem;
    }

}