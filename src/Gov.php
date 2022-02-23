<?php


namespace Cachesistemas\Gov;

use DateTime;
use Curl\Curl;

class Gov
{


    const url_consulta = 'https://valoresareceber.bcb.gov.br/publico/rest/valoresAReceber';
    public $cpf_cnpj;
    public $data;

    public  function validarCpfCnpj()
    {

        $this->cpf_cnpj  = preg_replace('/[^0-9]/', '', $this->cpf_cnpj);
        if (strlen($this->cpf_cnpj) == 11 ||  strlen($this->cpf_cnpj) == 14) {
            return true;
        } else {
            return array("status" => false, "mensagem" => "CPF ou CNPJ invalido");
            exit;
        }
    }


    


    public function consultar()
    {

        $this->validarCpfCnpj();
      

        $curl = new Curl();
        $curl->setUserAgent('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
        $curl->setReferrer('https://valoresareceber.bcb.gov.br/publico/');
        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        $curl->setCookie('_ga', 'GA1.3.90252762.1645587874');
        $curl->setCookie('_gid', 'GA1.3.1595689009.1645587874');
        $curl->setCookie('_gat_gtag_UA_65460906_18', '1');
        $curl->get(self::url_consulta . '/' . $this->cpf_cnpj . '/' . $this->data);
        if ($curl->error) {
            return array("status" => false, "mensagem" => "Erro: " .  $curl->errorCode . " " . $curl->errorMessage);
        } else {

            $arr = json_decode(json_encode($curl->response), true);
            if ($arr["temValorAReceber"]) {
                $date = new DateTime();
                $date->setTimestamp($arr["datasLiberacao"][0]["dataInicioEpochSeconds"]);
                $data_1 = $date->format('d/m/Y');
                $date->setTimestamp($arr["datasLiberacao"][1]["dataInicioEpochSeconds"]);
                $data_2 = $date->format('d/m/Y');
                return array("status" => true, "dataRegate" =>  $data_1, "dataRepescagem" => $data_2);
            } else {
                return array("status" => false, "mensagem" => "Não tem valor a receber");
            }
        }
    }
}
