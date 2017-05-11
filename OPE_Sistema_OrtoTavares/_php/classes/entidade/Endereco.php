<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:13
 */

class Endereco {

    private $nr_cpf_cnpj;
    private $ds_logradouro;
    private $nr_numero;
    private $ds_complemento;
    private $ds_bairro;
    private $nr_cep;
    private $ds_cidade;
    private $ds_uf;
    private $cd_sequencial;
    private $nr_cpf_dentista;
    private $nr_cnpj_trasportadora;
    private $nr_cnpj_consultorio;

    function __construct($nr_cnpj_consultorio, $nr_cnpj_trasportadora, $nr_cpf_dentista, $cd_sequencial, $ds_uf, $ds_cidade, $nr_cep, $ds_bairro, $ds_complemento, $nr_numero, $ds_logradouro, $nr_cpf_cnpj)
    {
        $this->nr_cnpj_consultorio = $nr_cnpj_consultorio;
        $this->nr_cnpj_trasportadora = $nr_cnpj_trasportadora;
        $this->nr_cpf_dentista = $nr_cpf_dentista;
        $this->cd_sequencial = $cd_sequencial;
        $this->ds_uf = $ds_uf;
        $this->ds_cidade = $ds_cidade;
        $this->nr_cep = $nr_cep;
        $this->ds_bairro = $ds_bairro;
        $this->ds_complemento = $ds_complemento;
        $this->nr_numero = $nr_numero;
        $this->ds_logradouro = $ds_logradouro;
        $this->nr_cpf_cnpj = $nr_cpf_cnpj;
    }


    /**
     * @return mixed
     */
    public function getNrCnpjConsultorio()
    {
        return $this->nr_cnpj_consultorio;
    }

    /**
     * @param mixed $nr_cnpj_consultorio
     */
    public function setNrCnpjConsultorio($nr_cnpj_consultorio)
    {
        $this->nr_cnpj_consultorio = $nr_cnpj_consultorio;
    }

    /**
     * @return mixed
     */
    public function getNrCnpjTrasportadora()
    {
        return $this->nr_cnpj_trasportadora;
    }

    /**
     * @param mixed $nr_cnpj_trasportadora
     */
    public function setNrCnpjTrasportadora($nr_cnpj_trasportadora)
    {
        $this->nr_cnpj_trasportadora = $nr_cnpj_trasportadora;
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
    public function getDsUf()
    {
        return $this->ds_uf;
    }

    /**
     * @param mixed $ds_uf
     */
    public function setDsUf($ds_uf)
    {
        $this->ds_uf = $ds_uf;
    }

    /**
     * @return mixed
     */
    public function getDsCidade()
    {
        return $this->ds_cidade;
    }

    /**
     * @param mixed $ds_cidade
     */
    public function setDsCidade($ds_cidade)
    {
        $this->ds_cidade = $ds_cidade;
    }

    /**
     * @return mixed
     */
    public function getNrCep()
    {
        return $this->nr_cep;
    }

    /**
     * @param mixed $nr_cep
     */
    public function setNrCep($nr_cep)
    {
        $this->nr_cep = $nr_cep;
    }

    /**
     * @return mixed
     */
    public function getDsBairro()
    {
        return $this->ds_bairro;
    }

    /**
     * @param mixed $ds_bairro
     */
    public function setDsBairro($ds_bairro)
    {
        $this->ds_bairro = $ds_bairro;
    }

    /**
     * @return mixed
     */
    public function getDsComplemento()
    {
        return $this->ds_complemento;
    }

    /**
     * @param mixed $ds_complemento
     */
    public function setDsComplemento($ds_complemento)
    {
        $this->ds_complemento = $ds_complemento;
    }

    /**
     * @return mixed
     */
    public function getNrNumero()
    {
        return $this->nr_numero;
    }

    /**
     * @param mixed $nr_numero
     */
    public function setNrNumero($nr_numero)
    {
        $this->nr_numero = $nr_numero;
    }

    /**
     * @return mixed
     */
    public function getDsLogradouro()
    {
        return $this->ds_logradouro;
    }

    /**
     * @param mixed $ds_logradouro
     */
    public function setDsLogradouro($ds_logradouro)
    {
        $this->ds_logradouro = $ds_logradouro;
    }




}