<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
    </tr>
  </thead>
  <tbody>


  <?php
    foreach ($listaUsuarios as $usuario) {
  ?>
    <tr>
      <th scope="row"><?php echo $usuario['codigo']?></th>
      <td><?php echo $usuario['nombre']?></td>
      <td><?php echo $usuario['correo']?></td>
      <td><?php echo $usuario['contrasena']?></td>
    </tr>
<?php
 }
?>
   
  </tbody>
</table>