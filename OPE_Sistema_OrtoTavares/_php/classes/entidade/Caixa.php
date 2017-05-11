<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:49
 */

class Caixa {

    private $cd_identificacao;
    private $ds_situacao;
    private $cd_tipo_pagamento;
    private $qtd_parcelas;
    private $ds_valor_total;
    private $dt_pagamento;

    function __construct($cd_identificacao, $ds_situacao, $cd_tipo_pagamento, $qtd_parcelas, $ds_valor_total, $dt_pagamento)
    {
        $this->cd_identificacao = $cd_identificacao;
        $this->ds_situacao = $ds_situacao;
        $this->cd_tipo_pagamento = $cd_tipo_pagamento;
        $this->qtd_parcelas = $qtd_parcelas;
        $this->ds_valor_total = $ds_valor_total;
        $this->dt_pagamento = $dt_pagamento;
    }

    /**
     * @return mixed
     */
    public function getCdIdentificacao()
    {
        return $this->cd_identificacao;
    }

    /**
     * @param mixed $cd_identificacao
     */
    public function setCdIdentificacao($cd_identificacao)
    {
        $this->cd_identificacao = $cd_identificacao;
    }

    /**
     * @return mixed
     */
    public function getDsSituacao()
    {
        return $this->ds_situacao;
    }

    /**
     * @param mixed $ds_situacao
     */
    public function setDsSituacao($ds_situacao)
    {
        $this->ds_situacao = $ds_situacao;
    }

    /**
     * @return mixed
     */
    public function getCdTipoPagamento()
    {
        return $this->cd_tipo_pagamento;
    }

    /**
     * @param mixed $cd_tipo_pagamento
     */
    public function setCdTipoPagamento($cd_tipo_pagamento)
    {
        $this->cd_tipo_pagamento = $cd_tipo_pagamento;
    }

    /**
     * @return mixed
     */
    public function getQtdParcelas()
    {
        return $this->qtd_parcelas;
    }

    /**
     * @param mixed $qtd_parcelas
     */
    public function setQtdParcelas($qtd_parcelas)
    {
        $this->qtd_parcelas = $qtd_parcelas;
    }

    /**
     * @return mixed
     */
    public function getDsValorTotal()
    {
        return $this->ds_valor_total;
    }

    /**
     * @param mixed $ds_valor_total
     */
    public function setDsValorTotal($ds_valor_total)
    {
        $this->ds_valor_total = $ds_valor_total;
    }

    /**
     * @return mixed
     */
    public function getDtPagamento()
    {
        return $this->dt_pagamento;
    }

    /**
     * @param mixed $dt_pagamento
     */
    public function setDtPagamento($dt_pagamento)
    {
        $this->dt_pagamento = $dt_pagamento;
    }



}