<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:22
 */

class Transportadora {

    private $nr_cnpj;
    private $nm_razao_social;
    private $nm_fantasia;
    private $cd_sequencial;
    private $cd_protetico;

    function __construct($nr_cnpj, $nm_razao_social, $nm_fantasia, $cd_sequencial, $cd_protetico)
    {
        $this->nr_cnpj = $nr_cnpj;
        $this->nm_razao_social = $nm_razao_social;
        $this->nm_fantasia = $nm_fantasia;
        $this->cd_sequencial = $cd_sequencial;
        $this->cd_protetico = $cd_protetico;
    }


    /**
     * @return mixed
     */
    public function getNrCnpj()
    {
        return $this->nr_cnpj;
    }

    /**
     * @param mixed $nr_cnpj
     */
    public function setNrCnpj($nr_cnpj)
    {
        $this->nr_cnpj = $nr_cnpj;
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
    public function getNmFantasia()
    {
        return $this->nm_fantasia;
    }

    /**
     * @param mixed $nm_fantasia
     */
    public function setNmFantasia($nm_fantasia)
    {
        $this->nm_fantasia = $nm_fantasia;
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