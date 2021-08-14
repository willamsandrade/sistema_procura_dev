<?php

/*
 * Classe utilizada para manipulação de dados
 * dos Devs do Formulário e do Banco de dados
 */

class Dev{

    private $idDev;
    private $nomeDev;
    private $sobreDev;
    private $emailDev;
    private $githubDev;
    private $senhaDev;
    private $idLang;


    public function getIdDev(){
        return $this->idDev;
    }

    public function setIdDev($idDev){
        $this->idDev = $idDev;
    }

    public function getNomeDev(){
        return $this->nomeDev;
    }

    public function setNomeDev($nomeDev) {
        $this->nomeDev = $nomeDev;
    }

    public function getSobreDev(){
        return $this->sobreDev;
    }

    public function setSobreDev($sobreDev){
        $this->sobreDev = $sobreDev;
    }

    public function getEmailDev(){
        return $this->emailDev;
    }

    public function setEmailDev($emailDev){
        $this->emailDev = $emailDev;
    }

    public function getGithubDev(){
        return $this->githubDev;
    }

    public function setGithubDev($githubDev){
        $this->githubDev = $githubDev;
    }

    public function getSenhaDev() {
        return $this->senhaDev;
    }

    public function setSenhaDev($senhaDev){
        $this->senhaDev = $senhaDev;
    }

    public function getIdLang(){
        return $this->idLang;
    }

    public function setIdLang($idLang){
        $this->idLang = $idLang;
    }


}