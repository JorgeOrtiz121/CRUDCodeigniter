
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Visualizar</title>
</head>
<body>
<?php 
    foreach ($data as $blog) {
        $id         = $blog->personasId;
        $nombre      = $blog->personasNombre;
        $apellido    = $blog->personasApellido;
        $titulo  =   $blog->personasTitulo;
        $username    = $blog->personasUsername;
    }
?>
<style>
    body{
        animation-name: example;
         animation-duration: 4s;
         animation-iteration-count:infinite;
         animation-direction: alternate;

        }
    @keyframes example {
    from { background-color:rgb(5, 6, 55);}
    to {background-color: red;}
    
}
    .respond-1 h1{
       font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
       display: flex;
       justify-content: center;
       align-items: center;
       color: white;
    }
    .respond-1 h1:hover{
        color: blue;
        background-color: orange;
    }
   
    .respond-2 h1{
        font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        display: flex;
       justify-content: center;
       align-items: center;
       color: white;
    }
     .respond-2 h1:hover{
        color: red;
        background-color: green;
    
    }
    .title h1 {
        display: flex;
       justify-content: center;
       align-items: center;
        color:red;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 25px;
        font-weight: 20%;
        
    }
    i{
        font-size: 50px;
        color: white;
    }
  
    i:hover{
        color: yellow;
        font-size: 75px;
    }
</style>
<a class="boton-regreso" href="<?php echo base_url()?>" ><i class='bx bxs-rewind-circle'></i></a>

<div class="title">
    <h1>Informacion del Usuario Persona</h1>
</div>
<div class="respond-1">
 <h1 class="op1"> <?php echo $id; ?></h1>
 <h1 class="op1"> <?php echo $nombre; ?> </h1>
 <h1 class="op1"> <?php echo $apellido; ?> </h1>
 <h1 class="op1"> <?php echo $titulo; ?> </h1>
 <h1 class="op1"> <?php echo $username; ?> </h1>
</div>
<hr>
<div class="respond-2">
 <h1 class="op2"> <?php echo $data[0]->personasId; ?></h1>
 <h1 class="op2"> <?php echo $data[0]->personasNombre; ?></h1>
 <h1 class="op2"> <?php echo $data[0]->personasApellido; ?></h1>
 <h1 class="op2"> <?php echo $data[0]->personasUsername; ?></h1>
 <h1 class="op2"> <?php echo $data[0]->personasTitulo; ?></h1>
</div>


</body>
</html>








