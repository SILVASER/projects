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
$res = $conn->query("select * from ajaxtrap");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['kode']; ?></td>
	    <td><?php echo $row['nama']; ?></td>
	    <td><?php echo $row['gender']; ?></td>
	    <td><?php echo $row['phone']; ?></td>
	    <td><?php echo $row['alamat']; ?></td>
	    <td>
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['kode']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['kode']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['kode']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['kode']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel<?php echo $row['kode']; ?>">Editar Datos</h2>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="nm">Nombre:</label>
    <input type="text" class="form-control" id="nm<?php echo $row['kode']; ?>" value="<?php echo $row['nama']; ?>">
  </div>
  <div class="form-group">
    <label for="gd">Email:</label>
    <input type="text" class="form-control" id="gd<?php echo $row['kode']; ?>" value="<?php echo $row['gender']; ?>">
  </div>
  <div class="form-group">
    <label for="pn">Teléfono:</label>
    <input type="text" class="form-control" id="pn<?php echo $row['kode']; ?>" value="<?php echo $row['phone']; ?>">
  </div>
  <div class="form-group">
    <label for="al">Dirección:</label>
    <input type="text" class="form-control" id="al<?php echo $row['kode']; ?>" value="<?php echo $row['alamat']; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="updatedata('<?php echo $row['kode']; ?>')" class="btn btn-primary">Guardar Cambios</button>
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