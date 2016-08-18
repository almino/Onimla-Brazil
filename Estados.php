<?php

namespace Onimla\Brazil;

use Onimla\HTML\Select;

class Estados extends Select {

    static $options = array(
        'AC' => 'Acre',
        'AL' => 'Alagoas',
        'AP' => 'Amapá',
        'AM' => 'Amazonas',
        'BA' => 'Bahia',
        'CE' => 'Ceará',
        'DF' => 'Distrito Federal',
        'ES' => 'Espirito Santo',
        'GO' => 'Goiás',
        'MA' => 'Maranhão',
        'MS' => 'Mato Grosso do Sul',
        'MT' => 'Mato Grosso',
        'MG' => 'Minas Gerais',
        'PA' => 'Pará',
        'PB' => 'Paraíba',
        'PR' => 'Paraná',
        'PE' => 'Pernambuco',
        'PI' => 'Piauí',
        'RJ' => 'Rio de Janeiro',
        'RN' => 'Rio Grande do Norte',
        'RS' => 'Rio Grande do Sul',
        'RO' => 'Rondônia',
        'RR' => 'Roraima',
        'SC' => 'Santa Catarina',
        'SP' => 'São Paulo',
        'SE' => 'Sergipe',
        'TO' => 'Tocantins',
    );

    /**
     * 
     * @param string $name Attributo <code>name</code> do campo
     * @param string $id (opcional) Attributo <code>id</code> do campo
     * @param boolean $siglas As siglas devem assumir o valor do atributo <code>value</code>
     */
    public function __construct($name, $id = FALSE, $siglas = FALSE) {
        parent::__construct($name, $siglas ? static::$options : array_values(static::$options));

        $this->id($id);
    }

}
