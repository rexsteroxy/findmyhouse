<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<div class="container-fluid">
  <div class="row mt-sm-5">
    <div class="col-sm-5 mx-auto">
      <div class="card">
      <div class="card-header">
        <div class="card-subtitle">
           <h2 class="text-danger"> Login</h2>
        </div>
      </div>
      <div class="card-body">
        <form method="post" class="form-group" action="">
        
        <span>Email: </span>
        <input type="email" class="form-control mb-sm-3" placeholder="Email ..." name="email">

        <span>Password: </span>
        <input type="password" class="form-control" placeholder="Password ..." name="password">
        
        <button type="submit" name="login" class="btn btn-outline-success mt-sm-2">Login</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>