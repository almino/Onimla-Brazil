<?php

namespace Onimla\Brazil\SemanticUI;

use Onimla\SemanticUI\Form\Dropdown;

class Estados extends Dropdown {

    public function __construct($name, $id = FALSE, $siglas = FALSE) {
        parent::__construct($name, $siglas ? \Onimla\Brazil\Estados::$options : array_values(\Onimla\Brazil\Estados::$options));

        $this->id($id);
    }

}
