
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista</title>

<style>

 


  section{

      position: relative;
  }
  

  #cover{

      
      background-size: cover;
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

      width: 35%;
      border-right: 20%;


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
  <div class="w3-container w3-black">
  <h1 align="center">Sistema de gestion de turnos BANCO</h1>
</div>

</header>
<br>

<body>

<!--barra de navegacion-->

<div class="w3-container">


<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-aqua w3-left-align">Opciones</button>
<div id="Demo1" class="w3-hide w3-animate-zoom">
  <a href="#" class="w3-button w3-block w3-left-align">Home</a>
  <a href="#" class="w3-button w3-block w3-left-align">Opcion 1</a>
  <a href="#" class="w3-button w3-block w3-left-align">Opcion 2</a>
  </div>
</div>

<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


<!--barra de navegacion-->






<div id="cover">   



<div class="container">
     

 <div id="izquierda">  

  <form class="w3-container" action="{{ url('Registro')}}" method="POST" >
        
        {{ csrf_field() }}
       
    
                        <strong>Nombre:</strong> 
                        <input id="in" align="justify" type="text" name="nombre"><br><br>
                        <strong>Apellido:</strong>
                        <input id="in" type="text" name="apellido"><br><br>
                         <strong>Tipo de documento: </strong>
                        <input type="text" name="edad"><br><br>
                         <strong>Numero de documento: </strong>
                        <input type="text" name="doc"><br><br>
                        <strong>Ciudad: </strong>
                        <input id="in" type="text" name="city"><br><br>
                        <strong>Edad:</strong> 
                        <input id="in" type="text" name="edad"><br><br>  
 

          <div class="esqinfder"></div> 
         
    </div>
  

          


            
    <div id="derecha">  


                     
             
  <strong>Tipo de turno: </strong> <select  class="custom-select">
  <option selected>Seleccione uno</option>
  <option value="1">Consignacion</option>
  <option value="2">Retiro</option>
  <option value="3">Consulta administrativa</option>

  </select>

  <br>
  <br>

    
   <strong>Prioridad:</strong>  <select  class="custom-select">
  <option selected>Seleccione uno</option>
  <option value="1">Mujer embarazada</option>
  <option value="2">Persona tercera edad</option>
  <option value="3">Persona con discapacidad</option>
  <option value="4">Mujer</option>
  <option value="3">Hombre</option>


  <br>
  <br>


</select>
            
           <h1 align="left"> <button  type="submit" class="btn btn-primary btn-sm">Comprar</button></h1>
           <!--  <br><button type="submit"> Buscar </button> --> 

       <div class="esqinfder"></div>     
   
    </div>
         
      </form>




   

</body>
</html>