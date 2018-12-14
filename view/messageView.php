<?php include "view/template/header.php";?>

<!-- modal button -->
<div class="d-flex justify-content-end m-3">
  <button type="button" class="btn btn-outline-danger " data-toggle="modal" data-target="#exampleModal">
    Envoyer un message
  </button>
</div>
<!-- modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sauvons la planete </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <form method="post" >
          <div class="form-group">
            <label for="exampleInputEmail1">Envoyer un message A:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="pseudo" placeholder="Destinateur">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Object :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="object" placeholder="Object">
          </div>

          <div class="form-group" >
            <label for="exampleInputEmail1">Message :</label>
            <input type="text" class="form-control h-25" id="exampleInputEmail1" name="content">
          </div>
          <input type="submit" class="btn bgdarkside text-white">
        </form>
      </div>
    </div>
  </div>
</div>



<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Objet</th>
      <th scope="col">Contenu</th>
      <th scope="col">Date/heure</th>
      <th scope="col">envoyeyr</th>
      <th scope="col">receveur</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($messages as $key => $message){ ?>
    <tr>
      <th scope="row"> <?php echo $message["id_message"] ?> </th>
      <td><?php echo $message["object"] ?> </td>
      <td><?php echo $message["content"] ?> </td>
      <td><?php echo $message["date"] ?> </td>
      <td><?php echo $_SESSION["user"]["pseudo"] ?> </td>
      <td><?php echo $message["getter"] ?> </td>
    </tr>

    <?php } ?>
  </tbody>
</table>


<?php  include "view/template/footer.php"; ?>
