<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="Contenedor-Principal">
        <h1>Registro de Personas</h1>
        <div class="row">
            <div class="col-sm-12">
              <form action="<?php echo base_url()."/crear"  ?>"  method="POST" >
              <label for="nombre">Nombre </label>
              <input type="text" name="nombre" id="nombre" autocomplete="name" placeholder="Ingrese aqui" class="form-control">
              <br>
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" autocomplete="apellido" placeholder="Ingrese aqui" class="form-control">
              <br>
              <label for="titulo">T. Profesional</label>
              <input type="text" name="titulo" id="titulo" autocomplete="titulo" placeholder="Ingrese aqui" class="form-control">
              <br>
              <label for="username">Username</label>
              <input type="text" name="username" id="username" autocomplete="username" placeholder="Ingrese aqui" class="form-control">
              <br>
              <button type="submit" class="btn btn-primary" >Guardar</button>
              </form>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class=" col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Titulo</td>
                            <td>Username</td>
                        </tr>
                        <?php foreach($data as $key) : ?>
                            <td><?php echo $key->personasNombre?></td>
                            <td><?php echo $key->personasApellido?></td>
                            <td><?php echo $key->personasTitulo?></td>
                            <td><?php echo $key->personasUsername?></td>
                            <td><a href="<?php echo base_url().'obtenerpersona/'.$key->personasId?>" class="btn btn-secondary">Visualizar</a></td>
                            <td><a href="<?php echo base_url().'actualizarpersona/'.$key->personasId?>" class="btn btn-warning">Actualizar</a></td>
                            <td><a href="<?php echo base_url().'eliminarpersona/'.$key->personasId?>" class="btn btn-danger">Eliminar</a></td>

                        </tr>
                      <?php    endforeach;  ?>
                    </table>
                     
                </div>
           
            </div>

        </div>
    </div>

    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>