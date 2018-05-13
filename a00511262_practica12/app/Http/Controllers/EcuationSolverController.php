<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcuationSolverController extends Controller
{       

    /**
     * Returns result
     */
    public function index(Request $request){
        $matriz = $request['x'];
		$filas = count($request['x']);
        $columnas = count($request['x'][1]);
        $method = new EcuationSolverController($request['x']);
        $solution = '';
        $solution = $method->getGaussSolution($solution, $filas, $matriz, $columnas);
        return view('welcome', compact('solution'));
    }
	/**
	 * Obtiene la solución de la matriz por el método de Gauss
	 * @param void
	 * @return void
	 */
	public function getGaussSolution($result, $filas, $matriz, $columnas){
        $result = $this->mostrarMatriz($filas, $columnas, $matriz);
		for($x = 1; $x <= $filas; $x++){
			$pivote = $matriz[$x][$x];
			for($i = $x; $i <= $filas; $i++ ){
				for($j = $x; $j <= $columnas; $j++ ){
					if($i == $x) {
						$matriz[$i][$j] /= $pivote;
						continue;
					} elseif($j == $x && $i != $x){
						$aux = $matriz[$i][$j] * (-1);
					}
					$matriz[$i][$j] = $matriz[$x][$j] * $aux + $matriz[$i][$j];
				}
				$result .=  $this->mostrarMatriz($filas, $columnas, $matriz);
			}
		}
		for($x = 1; $x > 0; $x--){
			$pivote = $matriz[$x][$x];
			for($i = $x-1; $i > 0; $i-- ){
				for($j = $x; $j <= $columnas; $j++ ){
					if($j == $x){
						$aux = $matriz[$i][$j] * (-1);
					}
					$matriz[$i][$j] =	$matriz[$x][$j] * $aux + $matriz[$i][$j];
				}
				$result .= $this->mostrarMatriz($filas, $columnas, $matriz);
			}
        }
        return $result;
        
}
	/**
	 * Imprime la matriz en una tabla
	 * @param void
	 * @return void
	 */
	private function mostrarMatriz($filas, $columnas, $matriz){
        $text = '<table border="1" class="text-center">';
		for($i = 1; $i <= $filas; $i++ ){
			$text .= '<tr>';
			for($j = 1; $j <= $columnas; $j++ ){
				$text .= '<td>';
				$text .= '<p>'.round($matriz[$i][$j], 2).'</p>';
                $text .= '</td>';
			}
			$text .= '</tr>';
		}
		$text .= '</table>';
        $text .= '<style>table{margin-bottom:10px;} table tr td {width:20px;}</style>';
        return $text;
    } 
}
