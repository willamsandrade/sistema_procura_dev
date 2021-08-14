<?php

/*
 * Classe utilizada para manipulação de dados
 * da Linguagens do Formulário e do Banco de dados
 */

class Lang{

    private $idLang;
    private $descLang;

    public function getIdLang(){
        return $this->idLang;
    }

    public function setIdLang($idLang){
        $this->idLang = $idLang;
    }

    public function getDescLang() {
        return $this->descLang;
    }

    public function setDescLang($descLang){
        $this->descLang = $descLang;
    }

}
