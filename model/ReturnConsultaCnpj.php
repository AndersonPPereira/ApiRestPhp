<?php

class ReturnConsultaCnpj{

    private $cnpj;
    private $message;
    private $ativo;

    // Obtem os valores das propriedade.
    function GetCnpj() {
        return $this->cnpj;
    }
    function GetMessage() {
        return $this->message;
    }
    function GetAtivo() {
        return $this->ativo;
    }

    // atribui valor as propriedades.
    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
    function setMessage($message) {
        $this->message = $message;
    }
    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function returnJson($ativo, $cnpj, $message){
      return json_encode(array("Ativo"=>$ativo, "Cnpj"=>$cnpj, "Message"=>$message));
    }
}

?>