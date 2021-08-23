<?php


class MinhaClasse

{

    public $publica = 'Public';

    protected $protegida = 'Protected';

    private $privada = 'Private';

    function imprimeAlo()

    {

        echo $this->publica;

        echo $this->protegida;

        echo $this->privada;

    }

}



$obj = new MinhaClasse();

echo $obj->publica;

echo $obj->protegida; 

echo $obj->privada; 

$obj->imprimeAlo();

?>