
<?php

use Alura\DesignPattern\Lot\Componente;

class Lotes implements Componente {
    private $name;
    private $children = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function add(Componente $component) {
        $this->children[] = $component;
    }

    public function executar(): string {
        $result = "Lotes: " . $this->name . " [";
            foreach ($this->children as $child) {
                $result .= $child->executar() . ", ";
            }
        $result = rtrim($result, ", ") . "]";
        return $result;
    }
}
