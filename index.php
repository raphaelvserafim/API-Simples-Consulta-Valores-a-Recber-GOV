<?php


require 'vendor/autoload.php';




use Cachesistemas\Gov\Gov;



$gov = new Gov();
$gov->cpf_cnpj = ''; // CPF ou CNPJ 
$gov->data     = ''; // DATA DE NASCIMENTO ou DATA DE ABERTURA EMPRESA YYYY-MM-DD 
 $consulta      = $gov->consultar();

  echo json_encode($consulta);

 
