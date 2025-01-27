<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidRut implements Rule
{
    public function passes($attribute, $value)
    {
        // Eliminar puntos y guiones
        $rut = str_replace(['.', '-'], '', $value);

        // Obtener el dígito verificador
        $dv = substr($rut, -1);
        $numero = substr($rut, 0, -1);

        // Calcular el dígito verificador
        $suma = 0;
        $factor = 2;
        for ($i = strlen($numero) - 1; $i >= 0; $i--) {
            $suma += $numero[$i] * $factor;
            $factor = $factor == 7 ? 2 : $factor + 1;
        }

        $dv_calculado = 11 - ($suma % 11);
        if ($dv_calculado == 11) {
            $dv_calculado = 0;
        } elseif ($dv_calculado == 10) {
            $dv_calculado = 'K';
        }

        return strtoupper($dv) == $dv_calculado;
    }

    public function message()
    {
        return 'El RUT ingresado no es válido.';
    }
}
