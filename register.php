<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<div class="container-fluid">
  <div class="row mt-sm-5">
    <div class="col-sm-5 mx-auto">
      <div class="card">
      <div class="card-header">
        <div class="card-subtitle">
           <h2 class="text-primary"> Register</h2>
        </div>
      </div>
      <div class="card-body">
        <form method="post" class="form-group">
        
        <span>Name: </span>
        <input type="text" class="form-control mb-sm-3" placeholder="Name ..." name="name">

        <span>Email: </span>
        <input type="email" class="form-control mb-sm-3" placeholder="Email ..." name="email">

        <span>Password: </span>
        <input type="password" class="form-control mb-sm-3" min="6" placeholder="Password ..." name="password1">

        <span>Confirm Password: </span>
        <input type="password" class="form-control mb-sm-2" min="6" placeholder="Retype Password ..." name="password2">

        <span>Licence ID: </span>
        <input type="text" class="form-control mb-sm-2" min="6" placeholder="Licence ..." name="licence">

        <span>Upload profile picture: </span>
        <input type="file" class=""  name="avatar">


        
        <button type="submit" name="login" class="btn btn-outline-success mt-sm-2">Register</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>