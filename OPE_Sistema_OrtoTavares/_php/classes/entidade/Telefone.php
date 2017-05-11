<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:47
 */

class Telefone {

    private $nr_cpf_cnpj;
    private $nr_ddd;
    private $nr_telefone;
    private $cd_tipo_telefone;
    private $cd_sequencial;
    private $nr_cpf_cnpj_fornecedor;
    private $nr_cpf_dentista;
    private $nr_cnpj_transportadora;

    function __construct($nr_cpf_cnpj, $nr_ddd, $nr_telefone, $cd_tipo_telefone, $cd_sequencial, $nr_cpf_cnpj_fornecedor, $nr_cpf_dentista, $nr_cnpj_transportadora)
    {
        $this->nr_cpf_cnpj = $nr_cpf_cnpj;
        $this->nr_ddd = $nr_ddd;
        $this->nr_telefone = $nr_telefone;
        $this->cd_tipo_telefone = $cd_tipo_telefone;
        $this->cd_sequencial = $cd_sequencial;
        $this->nr_cpf_cnpj_fornecedor = $nr_cpf_cnpj_fornecedor;
        $this->nr_cpf_dentista = $nr_cpf_dentista;
        $this->nr_cnpj_transportadora = $nr_cnpj_transportadora;
    }


    /**
     * @return mixed
     */
    public function getNrCpfCnpj()
    {
        return $this->nr_cpf_cnpj;
    }

    /**
     * @param mixed $nr_cpf_cnpj
     */
    public function setNrCpfCnpj($nr_cpf_cnpj)
    {
        $this->nr_cpf_cnpj = $nr_cpf_cnpj;
    }

    /**
     * @return mixed
     */
    public function getNrDdd()
    {
        return $this->nr_ddd;
    }

    /**
     * @param mixed $nr_ddd
     */
    public function setNrDdd($nr_ddd)
    {
        $this->nr_ddd = $nr_ddd;
    }

    /**
     * @return mixed
     */
    public function getNrTelefone()
    {
        return $this->nr_telefone;
    }

    /**
     * @param mixed $nr_telefone
     */
    public function setNrTelefone($nr_telefone)
    {
        $this->nr_telefone = $nr_telefone;
    }

    /**
     * @return mixed
     */
    public function getCdTipoTelefone()
    {
        return $this->cd_tipo_telefone;
    }

    /**
     * @param mixed $cd_tipo_telefone
     */
    public function setCdTipoTelefone($cd_tipo_telefone)
    {
        $this->cd_tipo_telefone = $cd_tipo_telefone;
    }

    /**
     * @return mixed
     */
    public function getCdSequencial()
    {
        return $this->cd_sequencial;
    }

    /**
     * @param mixed $cd_sequencial
     */
    public function setCdSequencial($cd_sequencial)
    {
        $this->cd_sequencial = $cd_sequencial;
    }

    /**
     * @return mixed
     */
    public function getNrCpfCnpjFornecedor()
    {
        return $this->nr_cpf_cnpj_fornecedor;
    }

    /**
     * @param mixed $nr_cpf_cnpj_fornecedor
     */
    public function setNrCpfCnpjFornecedor($nr_cpf_cnpj_fornecedor)
    {
        $this->nr_cpf_cnpj_fornecedor = $nr_cpf_cnpj_fornecedor;
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

    /**
     * @return mixed
     */
    public function getNrCnpjTransportadora()
    {
        return $this->nr_cnpj_transportadora;
    }

    /**
     * @param mixed $nr_cnpj_transportadora
     */
    public function setNrCnpjTransportadora($nr_cnpj_transportadora)
    {
        $this->nr_cnpj_transportadora = $nr_cnpj_transportadora;
    }



}