<?php


require 'vendor/autoload.php';




use Cachesistemas\Gov\Gov;



$gov = new Gov();
$gov->cpf_cnpj = '258.638.356-72'; // CPF ou CNPJ 
$gov->data     = '1953-10-09'; // DATA DE NASCIMENTO ou DATA DE ABERTURA EMPRESA YYYY-MM-DD 
 $consulta      = $gov->consultar();

  echo json_encode($consulta);

 