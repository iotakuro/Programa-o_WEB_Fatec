<?php

require_once 'celular.php';

class PrePago extends Celular {

    public function calculaCusto($tempo) {
        return ($this->getCustoMinutoBase() * 1.40) * $tempo;
    }

}

?>
