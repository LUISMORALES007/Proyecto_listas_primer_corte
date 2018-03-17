@extends('master')


@section('contenido2')

<!DOCTYPE html>
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

</body>
</html>
@stop