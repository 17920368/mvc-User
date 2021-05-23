<div class="panel panel-primary col-md-8 col-md-offset-2">
  <div class="panel-heading">
    Crear Usuario
  </div>
  <div class="panel-body">
    <form action="index.php?controller=UsuarioController&action=guardar" method="post" class="form-horizontal">
      <label class="control-label" for="txNombre">Nombre</label>
      <input class="form-control" type="text" name="txNombre" id="txNombre">
      <label class="control-label" for="txApellido">Apellido</label>
      <input class="form-control" type="text" name="txApellido" id="txApellido">
      <label class="control-label" for="txEmail">Email</label>
      <input class="form-control" type="text" name="txEmail" id="txEmail">
      <br>
      <button class="btn btn-warning" type="submit">Guardar</button>
    </form>
  </div>
</div>