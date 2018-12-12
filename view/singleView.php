<?php include "view/Template/header.php"; ?>



<div class="card container" >
  <div class="card-body">
    <h4 class="card-title">Nom : <?php echo  $user["last_name"] ; ?></h4>
    <h4 class="card-title">Prenom : <?php echo  $user["first_name"] ; ?></h4>
    <h6 class="card-subtitle mb-2">Age : <?php echo  $user["age"] ; ?></h6>
    <p class="card-text">Commentaire :</p>
    <div class="border"  style="height: 10em">
      <p class="card-text"><?php echo  $user["comment"] ; ?></p>
    </div>
    <a href="<?php echo 'deleteUser.php?id=' . $user['id']; ?>" class="card-link"><i class="fas fa-user-times fa-4x"></i></a>
    <a href="<?php echo 'updateUser.php?id=' . $user['id']; ?>" class="btn lightBg" class="card-link"><i class="fas fa-user-cog fa-4x"></i></a>
  </div>
</div>

<?php include "view/Template/footer.php"; ?>
