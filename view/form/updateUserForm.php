
<?php if(!empty($user)) { ?>
<div class="container text-light bg-dark rounded mb-4 " style="height: 100vh; width: 900px;">
  <form class="" action="" method="post">
    <input type="hidden" name ="id" name="id" value="<?php echo $user["id"]; ?>">
    <div class="form-group">
      <label for="formGroupExampleInput">Nom</label>
      <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $user["last_name"]; ?>" name="last_name" placeholder="Nom">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Prenom</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $user["first_name"]; ?>" name="first_name" placeholder="Prenom">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Age</label>
      <input type="number" class="form-control" id="formGroupExampleInput2" value="<?php echo $user["age"]; ?>" name="age" placeholder="Age">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Commentaire :</label>
      <textarea class="form-control"  name="comment" id="exampleFormControlTextarea1" rows="3"><?php echo $user["comment"]; ?></textarea>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Disponibilité</label>
      <select id="inputState" class="form-control" value="<?php echo $user["availability"]; ?>" name="availability">
        <option selected>Disponible</option>
        <option>Indisponible</option>
      </select>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Rue</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $user["street"]; ?>" name="street" placeholder="Rue">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Ville</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $user["city"]; ?>" name="city" placeholder="Ville">
    </div>
    <button type="submit" class="btn bgfront mt-2 text-light" style="width: 20%;">Submit</button>
  </form>
</div>

<?php }
?>
