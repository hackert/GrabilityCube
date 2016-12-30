<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cube;

class CubeController extends Controller
{
    protected $size;

	protected $cubo;

    public function __construct() {
       $this->cubo = array();
   }
       
/*
/  Asignacion de valor ingresado en la posicion x, y, z en el cubo.
/
*/
    public function update($x,$y,$z,$value){

        $i = $x.':'.$y.':'.$z;
        $this->cubo[$i] = intval($value);
 	}


/*
/  calcula la suma de los valores correspondientes a las celdas suministradas 
/  si el rango de posiciones no corresponde con el cubo,retornara false.
*/
 
 	public function query($x1, $y1, $z1, $x2, $y2, $z2) {        
   
        $result = 0;
        // var_dump($this->cubo); // die();
        foreach ($this->cubo as $content => $value):
            $position = explode(":", $content);
           // var_dump($position); // var_dump($position[0]); var_dump($position['x']); die();

            if ($position[0] < $x1 || $position[0] > $x2 )
                continue;
            if ($position[1] < $y1 || $position[1] > $y2 )
                continue;
            if ($position[2] < $z1 || $position[2] > $z2 )
                continue;
            $result += intval($value); 
        endforeach;       
        return $result;
    }


   

}
