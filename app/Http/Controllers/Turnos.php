<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Session;
class Turnos extends Controller{
    public function Matriz (Request $request){


            $Campo1 = $request -> input('c1');
             $Campo1 = $request -> input('c2');   
              $Campo1 = $request -> input('c3');
               $Campo1 = $request -> input('c4');

               
      $Matriz[]=[ 'nombre'=> 'camila' ,'genero'=>  'femenino' , 'profesion'=>'pintor' , 'edad'=>'33'];
      $Matriz[]=[ 'nombre'=>'jose' , 'genero'=>'masculino' ,'profesion'=>  'ingeniero', 'edad'=> '25'];


    if(Session::has('datos')){

         
         echo "si entra al condicional";



    }

     
     Session::put('datos',$Matriz);





}
