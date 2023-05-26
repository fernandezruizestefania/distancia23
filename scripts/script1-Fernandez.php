<?php
/**
 * Este script contiene dos funciones para realizar operaciones matemáticas básicas.
 *
 * @author Estefanía Fernández Ruiz
 * @version 1.0
 */

/**
 * Calcula la suma de dos números.
 *
 * @param int $x Primer número a sumar.
 * @param int $y Segundo número a sumar.
 * @return int La suma de $x y $y.
 * @version 1.0
 */
function suma($x, $y) {
    return $x + $y;
}

/**
 * Calcula la resta de dos números.
 *
 * @param int $x Número del que se resta.
 * @param int $y Número a restar.
 * @return int La resta de $x menos $y.
 * @version 1.0
 */
function resta($x, $y) {
    return $x - $y;
}

// Ejemplo de uso de las funciones:
echo suma(3, 4); // Muestra 7
echo resta(5, 2); // Muestra 3
?>
