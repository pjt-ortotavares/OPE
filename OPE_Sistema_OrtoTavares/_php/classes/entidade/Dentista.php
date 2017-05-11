<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:09
 */

class Dentista {

    private $nr_cpf;
    private $nm_dentista;
    private $cd_cro;

    function __construct($nr_cpf, $cd_cro, $nm_dentista)
    {
        $this->nr_cpf = $nr_cpf;
        $this->cd_cro = $cd_cro;
        $this->nm_dentista = $nm_dentista;
    }

    /**
     * @return mixed
     */
    public function getCdCro()
    {
        return $this->cd_cro;
    }

    /**
     * @param mixed $cd_cro
     */
    public function setCdCro($cd_cro)
    {
        $this->cd_cro = $cd_cro;
    }

    /**
     * @return mixed
     */
    public function getNmDentista()
    {
        return $this->nm_dentista;
    }

    /**
     * @param mixed $nm_dentista
     */
    public function setNmDentista($nm_dentista)
    {
        $this->nm_dentista = $nm_dentista;
    }

    /**
     * @return mixed
     */
    public function getNrCpf()
    {
        return $this->nr_cpf;
    }

    /**
     * @param mixed $nr_cpf
     */
    public function setNrCpf($nr_cpf)
    {
        $this->nr_cpf = $nr_cpf;
    }
}