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
                      

$listaAux = new SplDoublyLinkedList();
               $auxMatriz = Session::get('matriz');
            //dd(Session::has('matriz'));
		if(Session::has('matriz')){


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


			


               $listaAux = new SplDoublyLinkedList();
               $auxMatriz = Session::get('matriz');
               
                   for($i=0;$i<sizeof($auxMatriz);$i++){

                        $listaAux->push($auxMatriz[$i]);
                        $listaAux->next();
                        
                   }

           

			
           $aux=Session::get('matriz');
		 for ($i=1; $i <sizeof($listaAux) ; $i++) { 
			for ($j=0; $j <(sizeof($listaAux)-1) ; $j++) { 
				if ($aux[$j]['Edad']>$aux[$j+1]['Edad']) {
					

					$aux2=$aux[$j];
					$aux[$j]=$aux[$j+1];
					$aux[$j+1]=$aux2;

					
				}
			}
		}
		for ($i=1; $i <sizeof($listaAux) ; $i++) { 
			for ($j=0; $j <(sizeof($listaAux)-1) ; $j++) { 
				if ($aux[$j]['Prioridad']>$aux[$j+1]['Prioridad']) {
					

					$aux2=$aux[$j];
					$aux[$j]=$aux[$j+1];
					$aux[$j+1]=$aux2;




				}
			}
		}
      
          Session::put('matriz',$aux);
			
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

		}


  // Session::forget('matriz');

    	return view('registro');


    }   
     

public function Cajero1 (Request $request){

 $atencionCliente=Session::get('matriz');

 $atencionCliente[0];


        if(Session::has('sesioncajero1')){


			$dato = Session::get('sesioncajero1');
			$dato[] =	$atencionCliente[0];
		
			Session::put('sesioncajero1', $dato); 

		}  else{

			
			$sesioncajero1=$atencionCliente[0];
			Session::put('sesioncajero1',$sesioncajero1);
			


		}

		$contador=0;
 if(Session::has('sesioncajero1')){
            foreach (Session::get('matriz') as $array){
            	
            	$contador++;
                foreach ($array as $word => $meaning){

                	if ($contador==1) {
                		echo "<tr>";
	                
	                 echo "<strong><th>",$word,"</th></strong>"; 
	                  echo "<th>",$meaning,"</th>";
	            
	                 echo "</tr>"; 
                	}
                
                }
            }
   }


  return view('reporte2');

}


public function Cajero2 (Request $request){








}

public function Cajero3 (Request $request){








}








    

    





}
