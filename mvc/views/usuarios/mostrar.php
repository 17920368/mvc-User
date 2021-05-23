<div class="col-md-8 col-md-offset-1">
  <table class="table table-hover" id="tblUsuarios" style="background-color: azure;">
    <br>
    <tr style="background-color: aqua;">
      <td>ID</td>
      <td>Nombre</td>
      <td>Apellidos</td>
      <td>Correo</td>
      <td>Acciones</td>
    </tr>
    <?php
       while($user = $resultUser->fetch_object()): ?>
    <tr id="<?=$user->id?>"">
      <td><?=$user->id?></td>
      <td><?=$user->nombre?></td>
      <td><?=$user->apellido?></td>
      <td><?=$user->email?></td>
      <td><button class=" btn btn-primary" onclick="submitData(<?=$user->id?>);">
      Modificar</button>
      <button onclick="deleteElement('<?=$user->nombre?>','<?=$user->id?>');" class=" btn btn-secundary"
        id="btnDelete">Eliminar</button>
      </td>
    </tr>
    <?php
          endwhile;
    ?>
  </table>

  <script>
  function deleteElement(user, id) {
    var message = "¿Desea eliminar al usuario " + user + " ?";
    var result = confirm(message);
    if (result) {
      var url = 'index.php?controller=UsuarioController&action=delete&id=' + id;
      location.href = url;
    } else {
      console.log("no se borro");
    }
  }


  function submitData(x) {
    let id = document.getElementById(x).cells[0].innerText;
    let name = document.getElementById(x).cells[1].innerText;
    let lastName = document.getElementById(x).cells[2].innerText;
    let email = document.getElementById(x).cells[3].innerText;
    addLocalStorage(id, name, lastName, email);
    location.href = "index.php?controller=UsuarioController&action=viewUpdate";
  }

  function addLocalStorage(id, name, lastName, email) {
    localStorage.setItem("id", id);
    localStorage.setItem("name", name);
    localStorage.setItem("lastName", lastName);
    localStorage.setItem("email", email);
  }
  </script>
</div>