<?php
include 'C:\xampp\htdocs\apiRest\conexao\Conexao.php';

class ConsultaCnpjBloqueadoRepositorio {

    public function consultaCnpjBloqueado($cnpj = null) {
        $sql = "SELECT ativo FROM cliente where cnpj = ?";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue(1, $cnpj, PDO::PARAM_STR);
        $consulta->execute();
        return $consulta->fetchColumn();
    }
}

?>