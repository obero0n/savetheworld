<form class="container" method="post" action="home.php">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Triée par :</label>
      <select name="order" id="inputState" class="form-control">
        <option  value="last_name" selected>Nom A-Z</option>
        <option  value="age" >Age</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Disponibilité :</label>
      <select name="dispo" id="inputState" class="form-control">
        <option  value="Disponible" selected>Disponible</option>
        <option  value="Indisponible" >Indisponible</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Triée par ville :</label>
      <input type="text" class="form-control" id="inputZip" name="city" >
    </div>
    <button type="submit" class="btn btn-dark  col-md-2 mt-4" style="height: 3rem;">OK</button>
  </div>
</form>
