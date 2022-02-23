# API Simples PHP Consultar se tem valor a Receber do GOV 

## Um sistema simples para consultar se uma PF ou PJ tem valor a receber do GOV 

## Instalando via composer 
```
composer require cachesistemas/gov

```


## Exemplos de uso 


###### index.php
```php
<?php 

include_once 'vendor/autoload.php';

use Cachesistemas\Gov\Gov;

$gov = new Gov();
$gov->cpf_cnpj = ''; // CPF ou CNPJ 
$gov->data     = ''; // DATA DE NASCIMENTO ou DATA DE ABERTURA EMPRESA YYYY-MM-DD 
$consulta      = $gov->consultar();

echo json_encode($consulta);

 

```

###### Exemplo retorno TRUE   JSON 
```json
{
   "status":true,
   "dataRegate":"08\/03\/2022",
   "dataRepescagem":"12\/03\/2022"
}

```


##### ☕ PIX
``` 
23.711.695/0001-15 

```
##### Contato

<a href="https://wa.me/5566996852025"> 
<img src="https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white" /> 
</a>
<a href="https://www.instagram.com/raphaelvserafim"> 
<img src="https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white" /> 
</a>


