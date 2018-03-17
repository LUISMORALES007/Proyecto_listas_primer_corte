<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Session;
use \SplDoublyLinkedList;
class Turnos extends Controller{
    public function Matriz (Request $request){


            $nombre = $request -> input('Nombre');
            $apellido = $request -> input('Apellido');   
            $tipoDoc = $request -> input('TipoDocumento');
            $numDoc = $request -> input('NumeroDocumento');
            $ciudad = $request -> input('Ciudad');
            $edad = $request -> input('Edad');
            $tipoTurno=$request->input('TipoTurno');     
            $prioridad=$request->input('Prioridad');       
                      


            //dd(Session::has('matriz'));
		if(Session::has('matriz')){

             /* spldoubly
                     
               $listaAux = new SplDoublyLinkedList();
               $auxMatriz = Session::get('matriz');
               
                   for($i=0;$i<sizeof($auxMatriz);$i++){

                        $listaAux->push($auxMatriz[$i]);
                        $listaAux->next();

                   }

                */
			
			
			$dato = Session::get('matriz');
			$dato[] = array( 
				
				'Nombre'=>$nombre,
				'Apellido'=>$apellido,
				'TipoDocumento'=>$tipoDoc,
				'NumeroDocumento'=>$numDoc,
				'Ciudad'=>$ciudad,
				'Edad'=>$edad,
                'TipoTurno'=>$tipoTurno,
                 'Prioridad'=>$prioridad,
			);
			Session::put('matriz', $dato); 

			echo "Se ha agregado un nuevo usuario a la lista de espera...";

			Session::forget('matriz');

			

       
          
			
		}  else{

			
			$matriz[]=array(
			
              'Nombre'=>$nombre,
				'Apellido'=>$apellido,
				'TipoDocumento'=>$tipoDoc,
				'NumeroDocumento'=>$numDoc,
				'Ciudad'=>$ciudad,
				'Edad'=>$edad,
                'TipoTurno'=>$tipoTurno,
                 'Prioridad'=>$prioridad,
			);
			Session::put('matriz',$matriz);

			echo "Se creo la variable de session";

		}

          


		
  		//dd($request->session()->get('matriz'));
		//$datos=[
		//	'personas'=>$request->session()->get('matriz')
		//];

/*

       for ($listaAux->rewind();$listaAux->valid();$listaAux->next()) { 
       	# code...

       	 echo "string";

       }
*/


     
		
   
    	return view('registro');


    }   
     











    

    





}
