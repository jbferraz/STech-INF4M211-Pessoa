<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cPessoaJ
 *
 * @author jairb
 */
require_once '../model/pessoaJ.php';

class cPessoaJ {

    //put your code here
    private $pjs = [];//estamos usando este array pq não estamos trabalhando com
                       //banco de dados ainda

    public function __construct() {
        $this->mokPJ();
    }

    public function addPessoaJ($p) {
        array_push($this->pjs, $p);
    }

    public function mokPJ() {
        $pj1 = new pessoaJ();
        $pj1->setNome('Senac RS');
        $pj1->setNomeFantasia('Senac Tech');
        $pj1->setEndereco('Av. Venancio Aires');
        $pj1->setEmail('contato@senacrs.com.br');
        $pj1->setSite('www.senacrs.com.br');
        $pj1->setTelefone('5133403340');
        $pj1->setCnpj('123321123001-18');
        $this->addPessoaJ($pj1);
        
    }

}
