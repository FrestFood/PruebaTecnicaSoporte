<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Muestra la página de inicio de la prueba.
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $aplicante = [
            'puntos' => 0,
            'nivel' => 1,  // Según las indicaciones de README, el aplicante debe partir de Nivel 1, además hacía falta una coma para terminar la asignación inicial de la variable  
            'nombre' => 'Gabriel Peralta', // Nombre del aplicante 
            'aprobado' => false
        ];
        while ($aplicante['nivel'] < 10) { // El While debe durar hasta alcanzado el Nivel 10, empezando con 1, por eso la variable debe ser menos a 10 y llegado a 10 es cuando termina la operación. 
            $aplicante = $this->entrenar($aplicante);
        }
        $aplicante['aprobado'] = $this->evaluar($aplicante);

        return view('prueba', compact('aplicante')); // Como aplicante es un Array ---9/97089/3513914-h
    }

    /**
     * Entrena al aplicante para subir de nivel
     * @param array $aplicante
     * @reutrn array
     */
    private function entrenar(array $aplicante) //La variable $aplicante definida en la linea 15 no es un Int, es un Array de diferentes tipos de variables. 
    {
        $aplicante['puntos'] += 10 / $aplicante['nivel'];
		
		print_r($aplicante['puntos'] += 10 / $aplicante['nivel']);
		
        if ($aplicante['puntos'] >= 100) {
            $aplicante['nivel']++;
            $aplicante['puntos'] = 0;
        }
        return $aplicante;
    }

    /**
     * Valida el nivel del aplicante para saber si aprobo o no, el nivel de aprovacion es 10
     * @param array $aplicante
     * @return bool
     */
    private function evaluar(array $aplicante)
    {
        return $aplicante->nivel >= 10;  // El proceso dura hasta alcanzado el nivel 10
    }
}
