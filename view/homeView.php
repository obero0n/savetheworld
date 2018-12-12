<?php include "view/template/header.php"; ?>
<a href="logout">deconnexion</a>
<?php include "view/form/sortByForm.php"; ?>

<div class="container">
  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Age</th>
        <th scope="col">Disponibilité</th>
        <th scope="col">Rue</th>
        <th scope="col">Ville</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($user as $key => $value){ ?>
      <tr>
        <th scope="row"> <?php echo $value["id"] ?> </th>
        <td> <?php echo $value["last_name"] ?> </td>
        <td> <?php echo $value["first_name"] ?> </td>
        <td> <?php echo $value["age"] ?> </td>
        <?php if ($value["availability"] === "Disponible")
        {
          ?>
        <td class="text-success"><?php echo $value["availability"]; ?>  </td>

      <?php }else { ?>

        <td class="text-danger"><?php echo $value["availability"]; ?>  </td>
        <?php  }
          ?>
        <td> <?php echo $value["street"] ?> </td>
        <td> <?php echo $value["city"] ?> </td>
        <td>  <a href="single.php?id=<?php echo $value["id"]; ?>"><i class="fas fa-address-card fa-4x"></i></a>
      </td>
    </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php include "view/template/footer.php"; ?>
