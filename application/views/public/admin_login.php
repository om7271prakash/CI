<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Articles List</title>

    <?= link_tag('assets/css/bootstrap/bootstrap.min.css'); ?>
    <?= link_tag('assets/css/font-awesome/css/font-awesome.min.css'); ?>
    <?= link_tag('assets/css/datatable/dataTables.bootstrap4.css'); ?>
    <?= link_tag('assets/css/custom.css'); ?>

  </head>
  <body>
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <?= form_open('login/admin_login') ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <?= form_input(['type' => 'email', 'class' => 'form-control', 'id' => 'exampleInputEmail1', 'aria-describedby' => 'emailHelp', 'placeholder' => 'Enter email', 'name' => 'email']) ?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <?= form_password(['type' => 'password', 'class' => 'form-control', 'id' => 'exampleInputPassword1', 'name' => 'password', 'placeholder' => 'Enter Password']) ?>
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <?= form_checkbox(['class' => 'form-check-input', 'type' => 'checkbox', 'name' => 'rememberme', 'checked' => 'true']) ?>
                   Remember password
                 </label>
              </div>
            </div>
            <?= form_submit(['class' => 'btn btn-primary btn-block', 'type' => 'submit', 'value' => 'Login']) ?>
          <?= form_close(); ?>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

<?php include 'public_footer.php'; ?>
