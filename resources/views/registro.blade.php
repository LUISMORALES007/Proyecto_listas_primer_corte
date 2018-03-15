@extends('master')


@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista</title>

<style>


     
     
 


  section{

      position: relative;
  }
  

  #cover{

      background:  url(img/technology-3190200_1920.jpg) center center no-repeat;      background-size: cover;
      color: black;
      background-color: background-color:rgb(255,0,0);opacity:0.78 ;
      position: relative;
      width: 100%;
      height: 90%;
      margin-top:2%;
      margin-left: 2%;
      margin-right: 2%;
    
    
      
 }

 #letrab{

   color: #FFFFFF;

 }

 #izquierda { position: absolute;
              width:50% ;
              margin-top: 1%;
              float: left;
              height: 60%;
              left: 5%;
              

                 } 

 #derecha { position: relative;
            float: right;
            width: 50%;
            height: 30%;
            border: currentColor;
            right: 5%;
            margin-top:2%;
            margin-bottom: 2%
          
            

             }    

 .esqinfder { position: relative;
              bottom: 5px;
              right: 5px; 
              background: #ff0; }    



  #in{

      width: 38%;
      border-right: 20%;
      margin-left: 3%;
  }            

  #en{
    width: 28%;
    margin-left: 3%;
     
  }         

  #un{

    width: 26%;
    margin-left: 1%;
  }     
  #an{
     width: 25%;
     margin-left: 15%;

  }        
</style>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<header>
 

</header>
<br>

<body>


<div id="cover">   



<div class="container">
     

 <div id="izquierda">  

  <form class="w3-container" action="{{ url('registro')}}" method="POST" >
        
        {{ csrf_field() }}
       
    
                        <strong>Nombre:</strong> 
                        <input id="in" align="justify" type="text" name="nombre"><br><br>
                        <strong>Apellido:</strong>
                        <input id="in" type="text" name="apellido"><br><br>
                         <strong>Tipo de documento: </strong>
                        <input id="en" type="text" name="tipo"><br><br>
                         <strong>Numero de documento: </strong>
                        <input id="un" type="text" name="doc"><br><br>
                        <strong>Ciudad: </strong>
                        <input id="an" type="text" name="city"><br><br>
                        <strong>Edad:</strong> 
                        <input id="an" type="text" name="edad"><br><br>  
 

          <div class="esqinfder"></div> 
         
    </div>
  

          


            
    <div id="derecha">  


                     
             
  <strong>Tipo de turno: </strong> <select  class="custom-select">
  <option selected>Seleccione uno</option>
  <option value="consignacion">Consignacion</option>
  <option value="retiro">Retiro</option>
  <option value="consulta">Consulta administrativa</option>

  </select>

  <br>
  <br>

    
   <strong>Prioridad:</strong>  <select  class="custom-select">
  <option selected>Seleccione uno</option>
  <option value="embarazada">Mujer embarazada</option>
  <option value="terceraEdad">Persona tercera edad</option>
  <option value="discapacidad">Persona con discapacidad</option>
  <option value="mujer">Mujer</option>
  <option value="hombre">Hombre</option>


  <br>
  <br>


</select>
<br>
<br>
<br>

            
         <!--  <h1 align="left"> <button  type="submit" class="btn btn-primary btn-sm"></button></h1>-->
            <br><button type="submit"> Registrarse.. </button> 

       <div class="esqinfder"></div>     
   
    </div>
         
      </form>

          
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>

          @if(Session::has('matriz'))
            @foreach (Session::get('matriz') as $array)
                @foreach ($array as $word => $meaning)
                  <dt>{{ $word }}</dt>
                  <dd>{{ $meaning }}</dd>
                @endforeach
                <br><br>
            @endforeach
        @endif


   

</body>
</html>

@stop