<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:51
 */

class Consultorio {

    private $nr_cnpj;
    private $nm_consultorio;
    private $cd_sequencial;
    private $nr_cpf_dentista;

    function __construct($nr_cnpj, $nm_consultorio, $cd_sequencial, $nr_cpf_dentista)
    {
        $this->nr_cnpj = $nr_cnpj;
        $this->nm_consultorio = $nm_consultorio;
        $this->cd_sequencial = $cd_sequencial;
        $this->nr_cpf_dentista = $nr_cpf_dentista;
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
    public function getNmConsultorio()
    {
        return $this->nm_consultorio;
    }

    /**
     * @param mixed $nm_consultorio
     */
    public function setNmConsultorio($nm_consultorio)
    {
        $this->nm_consultorio = $nm_consultorio;
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