<?php
/**
 * Este script contiene una clase para representar un rectángulo con una base y una altura dadas.
 *
 * @author Estefanía Fernández Ruiz
 * @version 2.0
 */

/**
 * Clase para representar un rectángulo con una base y una altura dadas.
 */
class Rectangulo {
    /**
     * Base del rectángulo.
     *
     * @var float
     */
    public $base;

    /**
     * Altura del rectángulo.
     *
     * @var float
     */
    public $altura;

    /**
     * Constructor de la clase Rectángulo.
     *
     * @param float $base Base del rectángulo.
     * @param float $altura Altura del rectángulo.
     */
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    /**
     * Calcula el área del rectángulo.
     *
     * @return float El área del rectángulo.
     */
    public function area() {
        return $this->base * $this->altura;
    }

    /**
     * Calcula el perímetro del rectángulo.
     *
     * @return float El perímetro del rectángulo.
     */
    public function perimetro() {
        return 2 * ($this->base + $this->altura);
    }
}

// Ejemplo de uso de la clase Rectángulo:
$rectangulo = new Rectangulo(3, 4);
echo "El área del rectángulo es: " . $rectangulo->area(); // Muestra "El área del rectángulo es: 12"
echo "El perímetro del rectángulo es: " . $rectangulo->perimetro(); // Muestra "El perímetro del rectángulo es: 14"
?>
