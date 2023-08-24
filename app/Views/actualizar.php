
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Actualizar</title>
</head>
<body>
<div class="Contenedor-Principal">
<?php 
    foreach ($data as $blog) {
        $id         = $blog->personasId;
        $nombre      = $blog->personasNombre;
        $apellido    = $blog->personasApellido;
        $titulo  =   $blog->personasTitulo;
        $username    = $blog->personasUsername;
    }
?>

        <h1>Registro de Personas</h1>
        <div class="row">
            <div class="col-sm-12">
              <form action="<?php echo base_url()."actualizar"  ?>"  method="POST" >
              <input type="number" name="idUsuario" id="idUsuario" hidden="" value="<?php echo $id ?>">
              <label for="nombre">Nombre </label>
              <input type="text" name="nombre" id="nombre" autocomplete="name" placeholder="Ingrese aqui" class="form-control" value="<?php echo $nombre ?>">
              <br>
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" autocomplete="apellido" placeholder="Ingrese aqui" class="form-control" value="<?php echo $apellido ?>">
              <br>
              <label for="titulo">T. Profesional</label>
              <input type="text" name="titulo" id="titulo" autocomplete="titulo" placeholder="Ingrese aqui" class="form-control" value="<?php echo $titulo ?>">
              <br>
              <label for="username">Username</label>
              <input type="text" name="username" id="username" autocomplete="username" placeholder="Ingrese aqui" class="form-control" value="<?php echo $username ?>">
              <br>
              <button type="submit" class="btn btn-secondary" >Guardar</button>
              </form>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>