<?php

require_once 'C:\xampp\htdocs\apiRest\repositorio\ConsultaCnpjBloqueadoRepositorio.php';
require_once 'C:\xampp\htdocs\apiRest\model\ReturnConsultaCnpj.php';

class ConsultaCnpjControl{

	function consultaCnpjBloqueado($cnpj) {

		$returnConsultaCnpj = new ReturnConsultaCnpj();
		$consulta = new ConsultaCnpjBloqueadoRepositorio();
		$ativo = (boolean)$consulta->consultaCnpjBloqueado($cnpj);

		if(!empty($ativo) && $ativo){
			$returnConsultaCnpj->setAtivo(true);
			$returnConsultaCnpj->setCnpj($cnpj);
			$returnConsultaCnpj->setMessage('Cliente liberado.');

			return $returnConsultaCnpj->returnJson($returnConsultaCnpj->GetAtivo(),
			$returnConsultaCnpj->GetCnpj(), $returnConsultaCnpj->GetMessage());
		}
		else {
			$returnConsultaCnpj->setAtivo(false);
			$returnConsultaCnpj->setCnpj($cnpj);
			$returnConsultaCnpj->setMessage('Cliente bloqueado.');

			return $returnConsultaCnpj->returnJson($returnConsultaCnpj->GetAtivo(),
			$returnConsultaCnpj->GetCnpj(), $returnConsultaCnpj->GetMessage());
		}
	}
}

?>