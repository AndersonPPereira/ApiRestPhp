<?php
include '../../control/ConsultaCnpjControl.php';

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$consultaCnpjControl = new ConsultaCnpjControl();
header('Content-Type: application/json');
echo $consultaCnpjControl->consultaCnpjBloqueado($obj->cnpj);

?>