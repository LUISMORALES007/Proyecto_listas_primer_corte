<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Session;
class Turnos extends Controller{
    public function Matriz (Request $request){


            $nombre = $request -> input('nombre');
            $apellido = $request -> input('apellido');   
            $tipoDoc = $request -> input('tipo');
            $numDoc = $request -> input('doc');
            $ciudad = $request -> input('city');
            $edad = $request -> input('edad');
            /*$consignacion=$request->value('consignacion');         */
                      


            //dd(Session::has('matriz'));
		if(Session::has('matriz')){
			
			$dato = Session::get('matriz');
			$dato[] = array( 
				
				'nombre'=>$nombre,
				'apellido'=>$apellido,
				'tipo'=>$tipoDoc,
				'doc'=>$numDoc,
				'city'=>$ciudad,
				'edad'=>$edad,
            
			);
			Session::put('matriz', $dato); 

			echo "Se ha agregado un nuevo campo...";

			/*Session::forget('matriz');*/



			
		}else{

			
			$matriz[]=array(
			
                'nombre'=>$nombre,
				'apellido'=>$apellido,
				'tipo'=>$tipoDoc,
				'doc'=>$numDoc,
				'city'=>$ciudad,
				'edad'=>$edad,
				
			);
			Session::put('matriz',$matriz);

			echo "Se creo la variable de session";

		}
		
  		//dd($request->session()->get('matriz'));
		//$datos=[
		//	'personas'=>$request->session()->get('matriz')
		//];
		
    	return view('registro');


    }   
     


    





}
