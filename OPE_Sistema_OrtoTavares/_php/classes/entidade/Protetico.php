<?php
/**
 * Created by PhpStorm.
 * User: bruno.faustino
 * Date: 11/05/2017
 * Time: 09:23
 */

class Protetico {

    private $cd_protetico;
    private $nr_cpf;

    function __construct($cd_protetico, $nr_cpf)
    {
        $this->cd_protetico = $cd_protetico;
        $this->nr_cpf = $nr_cpf;
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