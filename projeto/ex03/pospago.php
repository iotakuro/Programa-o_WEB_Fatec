<?php

require_once 'celular.php';

class PosPago extends Celular {

    public function calculaCusto($tempo) {
        return ($this->getCustoMinutoBase() * 0.9) * $tempo;
    }

}

?>
