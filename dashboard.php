<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<div class="container-fluid">
  <div class="row mt-sm-5">
    <div class="col-sm-5 mx-auto">
      <div class="card">
      <div class="card-header">
        <div class="card-subtitle">
           <h2 class="text-primary"> Upload a house</h2>
        </div>
      </div>
      <div class="card-body">
        <form method="post" class="form-group">
        
        <span>Location: </span>
        <input type="text" class="form-control mb-sm-3" placeholder="Location ..." name="name">

        <span>Description: </span>
        <input type="email" class="form-control mb-sm-3" placeholder="Description ..." name="email">

        <span>Upload profile picture: </span>
        <input type="file" class=""  name="avatar" multiple>


        
        <button type="submit" name="login" class="btn btn-outline-success mt-sm-2">Register</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>