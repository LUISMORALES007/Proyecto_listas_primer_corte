@extends('master')


@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <h1>reporte</h1>


   <div id="izquierda">  

  <form class="w3-container" action="{{ url('registro')}}" method="POST" >
        
        {{ csrf_field() }}
       
                      

   </form>       




</body>
</html>
@endsection

@section('contenido2')
!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <h2>reporte2</h2>



  <form class="w3-container" action="{{ url('registro2')}}" method="POST" >
        
        {{ csrf_field() }}
       
                       
            <button type="submit"> atender </button>              



   </form>        

 @if(Session::has('sesioncajero1'))
            @foreach (Session::get('matriz') as $array)
                @foreach ($array as $word => $meaning)
                 <tr>
                
                 <strong><th>{{ $word }}</th></strong> 
                  <th>{{ $meaning }}</th>
            
                 </tr> 
                @endforeach
                <br><br>
            @endforeach
        @endif
</body>
</html>
@stop