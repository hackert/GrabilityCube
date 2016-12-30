<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Manager;

class ManagerController extends Controller
{
    /*
    / Formulario donde se ingresan los datos de procesamiento del cubo
    */

    public function inicio(Request $request){
            return view('cube');
    }

    
    /*
    /  Funcion Base que centraliza lo recibido del Formulario
    /  y realiza toda la funcionalidad que dinamicamente se le ingrese en el usuario
    */

    public function procesar(Request $request){
       // Variables de post
       $this->validate($request,['size' => ['required','max:2'],'NumbOp' => ['required']]);
     	 $size = intval($request->input('size'));
       $n_operacion = intval($request->input('NumbOp'));
       // creando el cubo
       $cube = new CubeController();
       // Validar que el numero de operaciones que este en el rango que del lado del backend le estoy estableciendo
       if($n_operacion > 1 || $n_operacion <= 50){
              // ejecuto el numero de querys suministrado
                $respuesta = "";
                for ($i=0; $i < $n_operacion; $i++) { 
                // tipo de query                
                $type = 'type'.$i;
                $op   = 'op'.$i;
                // var_dump($request->all());

                if($request->input($type) === 'update'){
                    // Update
                    $values = $request->input($op);
                    // separa parametros y valor a setear
                    $cad1 = explode('=>', $values); 
                    $cad2 = explode(':',$cad1[0]);
                    $cube->update($cad2[0],$cad2[1],$cad2[2],$cad1[1]);
                }else if($request->input($type) === 'query'){
                  // query
                 // separa los bloques
                    $values = $request->input($op);

                    $cad1 = explode('+', $values); 
                    $bloque1 = explode(':',$cad1[0]);
                    $bloque2 = explode(':',$cad1[1]);
                    $respuesta .= $cube->query(intval($bloque1[0]), intval($bloque1[1]),intval($bloque1[2]), intval($bloque2[0]), intval($bloque2[1]), intval($bloque2[2]))."<br>";
                   
                } // endelse
                // var_dump($cube->)
              } // endfor
             // var_dump($respuesta); die();
          return view('/form',["value" => $respuesta]);

       }// return false;            
       
    }

}
?>
