<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:50
 */

class Pedido {

    private $cd_pedido;
    private $ds_observacao;
    private $nr_cpf_dentista;

    function __construct($cd_pedido, $ds_observacao, $nr_cpf_dentista)
    {
        $this->cd_pedido = $cd_pedido;
        $this->ds_observacao = $ds_observacao;
        $this->nr_cpf_dentista = $nr_cpf_dentista;
    }


    /**
     * @return mixed
     */
    public function getCdPedido()
    {
        return $this->cd_pedido;
    }

    /**
     * @param mixed $cd_pedido
     */
    public function setCdPedido($cd_pedido)
    {
        $this->cd_pedido = $cd_pedido;
    }

    /**
     * @return mixed
     */
    public function getDsObservacao()
    {
        return $this->ds_observacao;
    }

    /**
     * @param mixed $ds_observacao
     */
    public function setDsObservacao($ds_observacao)
    {
        $this->ds_observacao = $ds_observacao;
    }

    /**
     * @return mixed
     */
    public function getNrCpfDentista()
    {
        return $this->nr_cpf_dentista;
    }

    /**
     * @param mixed $nr_cpf_dentista
     */
    public function setNrCpfDentista($nr_cpf_dentista)
    {
        $this->nr_cpf_dentista = $nr_cpf_dentista;
    }



}