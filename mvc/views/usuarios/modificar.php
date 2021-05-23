<div class="panel panel-primary col-md-8 col-md-offset-2">
  <div class="panel-heading">
    Modificar Usuario
  </div>

  <div class="panel-body">
    <form id="form" method="post" class="form-horizontal">
      <label class="control-label" for="txNombre">ID</label>
      <input class="form-control" type="text" name="txId" id="txId">
      <label class="control-label" for="txNombre">Nombre</label>
      <input class="form-control" type="text" name="txNombre" id="txNombre">
      <label class="control-label" for="txApellido">Apellido</label>
      <input class="form-control" type="text" name="txApellido" id="txApellido">
      <label class="control-label" for="txEmail">Email</label>
      <input class="form-control" type="text" name="txEmail" id="txEmail">
      <br>
      <button class="btn btn-warning" type="submit">Modificar</button>
    </form>
  </div>
</div>

<script>
const form = document.getElementById("form");
form.addEventListener("submit", getByID);

function getUserById() {
  let name = document.getElementById("txNombre");
  name.value = localStorage.getItem("name");
  document.getElementById("txApellido").value = localStorage.getItem("lastName");
  document.getElementById("txEmail").value = localStorage.getItem("email");
  document.getElementById("txId").value = localStorage.getItem("id");
  document.getElementById("txId").disabled = true;
}

function getByID() {
  let id = localStorage.getItem("id");
  let url = "index.php?controller=UsuarioController&action=update&id='" + id + "'";
  form.action = url;
}

window.onload = getUserById;
</script>
<!--MODIFICAR ORIGINAL-->