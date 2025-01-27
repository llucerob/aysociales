<?php

namespace App\Rules;


use Illuminate\Contracts\Validation\ValidationRuleRule;

class ValidRut implements ValidRut
{



        public function calcular_dv($rut) {

            $rut = str_replace(['-', '.', ' '], '', trim($rut));  // Eliminar puntos y espacios

            $numero_rut = substr($rut, 0, -1);  // Todos los números del RUT, excepto el DV
            $digito_verificador = substr($rut, -1);  // El dígito verificador (último carácter)

            // Verificación con Módulo 11
            $multipliers = [2, 3, 4, 5, 6, 7];
            $suma = 0;
            $len = count($multipliers);
            for ($i = 0, $j = strlen($numero_rut) - 1; $j >= 0; $i++, $j--) {
                $digit = $numero_rut[$j];
                if (!is_numeric($digit)) {
                    return false;  // Si no es un número válido, retornar False
                }
                $suma += $digit * $multipliers[$i % $len];
            }

            $resto = $suma % 11;
            $dv_calculado = 11 - $resto;
            if ($dv_calculado == 11) {
                $dv_calculado = '0';
            } elseif ($dv_calculado == 10) {
                $dv_calculado = 'K';
            }

            return strtoupper($digito_verificador) == (string)$dv_calculado;
        }

    public function message()
    {
        return 'El RUT ingresado no es válido.';
    }
}
