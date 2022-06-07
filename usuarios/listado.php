<?php 
require 'usuarios.php';
 ?>

<!doctype html>
<html lang="es">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="http://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Listado</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="menu.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="control.php" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Editar usuario</span>
      </a>

<?php 
require 'navedicion.php';
 ?>
    </div>
  </header>

<div class="container">
    <form action="" method="post" ectype="multipart/form-data">



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Usuarios</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-row">
        <!-- <label for="">Id:</label> -->
        <input type="hidden" required name="txtId" value="<?php echo $txtId;?>" placeholder="" id="txt1" require="">
        <!-- <br> -->

        <div class="form-group col-md-4">
        <label for="">Nombre:</label>
        <input type="text" class="form-control" required name="txtNombre" value="<?php echo $txtNombre;?>" placeholder="" id="txt2" require="">
        </div>

        <div class="form-group col-md-4">
        <label for="">Puesto:</label>
        <input type="text" class="form-control" required name="txtPuesto" value="<?php echo $txtPuesto;?>" placeholder="" id="txt3" require="">
        </div>

        <div class="form-group col-md-4">
        <label for="">Usuario:</label>
        <input type="text" class="form-control" required name="txtUsuario" value="<?php echo $txtUsuario;?>" placeholder="" id="txt4" require="">
        </div>

        <div class="form-group col-md-12">
        <label for="">Contraseña:</label>
        <input type="text" class="form-control" required name="txtContrasena" value="<?php echo $txtContrasena;?>" placeholder="" id="txt5" require="">
        <br>
        </div>
            </div>
          </div>
          <div class="modal-footer">
        <button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>
        <button value="btnModificar" <?php echo $accionModificar;?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
        <button value="btnEliminar" onclick="return Confirmar('¿Desea borrar?');" <?php echo $accionEliminar;?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
        <button value="btnCancelar" <?php echo $accionCancelar;?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <br/>
    <br/>
</form>

  <div class="row">
    <!-- table-hover es para que cambie de color al tabla al pasar cursor y bordered para aplicar borde-->
    <table class= "table table-hover table-bordered">

      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>Usuario</th>
          <th>Contraseña</th>
          <th>Acciones</th>
        </tr>
      </thead>
    <?php foreach($listaUsuarios as $usuario){ ?>
        <tr>
          <td><?php echo $usuario ['Id']; ?></td>
          <td><?php echo $usuario ['Nombre']; ?></td>
          <td><?php echo $usuario ['Puesto']; ?></td>
          <td><?php echo $usuario ['Usuario']; ?></td>
          <td><?php echo $usuario ['Contrasena']; ?></td>
          <td>
            <form action="" method="post">
              <input type="hidden" name="txtId" value="<?php echo $usuario ['Id']; ?>">
              <input type="hidden" name="txtNombre" value="<?php echo $usuario ['Nombre']; ?>">
              <input type="hidden" name="txtPuesto" value="<?php echo $usuario ['Puesto']; ?>">
              <input type="hidden" name="txtUsuario" value="<?php echo $usuario ['Usuario']; ?>">
              <input type="hidden" name="txtContrasena" value="<?php echo $usuario ['Contrasena']; ?>">

            <input type="submit" value="Seleccionar" class="btn btn-info" name="accion">  

            <!-- <input value="Eliminar" type="submit" name="accion"> -->
            </form>
            
          </td>
        </tr>
    <?php } ?>


    </table>
  </div>
  <!--instrcción de bootstrap que hace que el modal aparezca, en el case seleccionar hara que muestre el modal-->
  <?php if($mostrarModal){?>
    <script>
      $('#exampleModal').modal('show');
    </script>
  <?php } ?>

  <script>
    function Confirmar(Mensaje){
      return (confirm(Mensaje))?true:false;
    }
  </script>

  </div>
  
<?php 
require 'footer.php';
 ?>
</div>

</body>
    

</html>
