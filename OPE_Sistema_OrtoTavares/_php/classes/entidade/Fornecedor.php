<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:24
 */

class Fornecedor {

    private $nr_cpf_cnpj;
    private $nm_razao_social;
    private $nm_fantazia;
    private $cd_sequencial;
    private $cd_protetico;

    function __construct($nr_cpf_cnpj, $nm_razao_social, $nm_fantazia, $cd_sequencial, $cd_protetico)
    {
        $this->nr_cpf_cnpj = $nr_cpf_cnpj;
        $this->nm_razao_social = $nm_razao_social;
        $this->nm_fantazia = $nm_fantazia;
        $this->cd_sequencial = $cd_sequencial;
        $this->cd_protetico = $cd_protetico;
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
    public function getNmRazaoSocial()
    {
        return $this->nm_razao_social;
    }

    /**
     * @param mixed $nm_razao_social
     */
    public function setNmRazaoSocial($nm_razao_social)
    {
        $this->nm_razao_social = $nm_razao_social;
    }

    /**
     * @return mixed
     */
    public function getNmFantazia()
    {
        return $this->nm_fantazia;
    }

    /**
     * @param mixed $nm_fantazia
     */
    public function setNmFantazia($nm_fantazia)
    {
        $this->nm_fantazia = $nm_fantazia;
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
    public function getCdProtetico()
    {
        return $this->cd_protetico;
    }

    /**
     * @param mixed $cd_protetico
     */
    public function setCdProtetico($cd_protetico)
    {
        $this->cd_protetico = $cd_protetico;
    }


}