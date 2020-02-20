<table class="table table-bordered table-hover">

	<thead>
	  <tr class="danger">
	    <th>id</th>
	    <th>Nombre</th>
	    <th>Email</th>
	    <th>Telefono</th>
	    <th>Dirección</th>
	    <th>Acción</th>
	  </tr>
	</thead>
	<tbody>
<?php
include "config.php";
$res = $conn->query("select * from tusuario");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['codigo']; ?></td>
	    <td><?php echo $row['nombre']; ?></td>
	    <td><?php echo $row['email']; ?></td>
	    <td><?php echo $row['telefono']; ?></td>
	    <td><?php echo $row['direccion']; ?></td>
	    <td>
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['codigo']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['codigo']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['codigo']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel<?php echo $row['codigo']; ?>">Editar Datos</h2>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="n">Nombre:</label>
    <input type="text" class="form-control" id="n<?php echo $row['codigo']; ?>" value="<?php echo $row['nombre']; ?>">
  </div>
  <div class="form-group">
    <label for="em">Email:</label>
    <input type="text" class="form-control" id="em<?php echo $row['codigo']; ?>" value="<?php echo $row['email']; ?>">
  </div>
  <div class="form-group">
    <label for="tel">Teléfono:</label>
    <input type="text" class="form-control" id="tel<?php echo $row['codigo']; ?>" value="<?php echo $row['telefono']; ?>">
  </div>
  <div class="form-group">
    <label for="dir">Dirección:</label>
    <input type="text" class="form-control" id="dir<?php echo $row['codigo']; ?>" value="<?php echo $row['direccion']; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="updatedata('<?php echo $row['codigo']; ?>')" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
	    
	    </td>
	  </tr>
<?php
}
?>
	</tbody>
      </table>