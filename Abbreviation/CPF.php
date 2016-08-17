<?php

namespace Onimla\Brazil\Abbreviation;

use Onimla\HTML\Abbreviation;

class CPF extends Abbreviation {

    public function __construct() {
        parent::__construct('CPF', 'Cadastro Nacional de Pessoa Física');
    }

}
