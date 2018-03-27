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
      <?php if ( $error = $this->session->flashdata('register_failed') ) {  ?>
        <div class="mx-auto col-md-5 mt-3 alert alert-danger text-center">
          <?= $error ?>
        </div>
      <?php } ?>
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <?= form_open('login/register_user'); ?>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">First name</label>
                  <?= form_input(['type' => 'text', 'class' => 'form-control', 'id' => 'exampleInputUsername', 'aria-describedby' => 'usernameHelp', 'placeholder' => 'Enter First Name', 'name' => 'fname', 'value' => set_value('fname')]) ?>
                  <?php
                    if(form_error('fname')) {
                      echo form_error('fname');
                    }
                  ?>
                </div>
                <div class="col-md-6">
                  <label for="exampleInputLastName">Last name</label>
                  <?= form_input(['type' => 'text', 'class' => 'form-control', 'id' => 'exampleInputUsername', 'aria-describedby' => 'usernameHelp', 'placeholder' => 'Enter Last Name', 'name' => 'lname', 'value' => set_value('lname')]) ?>
                  <?php
                    if(form_error('lname')) {
                      echo form_error('lname');
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <?= form_input(['type' => 'text', 'class' => 'form-control', 'id' => 'exampleInputUsername', 'aria-describedby' => 'usernameHelp', 'placeholder' => 'Enter Username', 'name' => 'uname', 'value' => set_value('uname')]) ?>
              <?php
                if(form_error('uname')) {
                  echo form_error('uname');
                }
              ?>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputPassword1">Password</label>
                  <?= form_password(['type' => 'password', 'class' => 'form-control', 'id' => 'exampleInputUsername', 'aria-describedby' => 'usernameHelp', 'placeholder' => 'Enter Password', 'name' => 'pword']) ?>
                  <?php
                    if(form_error('pword')) {
                      echo form_error('pword');
                    }
                  ?>
                </div>
                <div class="col-md-6">
                  <label for="exampleConfirmPassword">Confirm password</label>
                  <?= form_password(['type' => 'password', 'class' => 'form-control', 'id' => 'exampleInputUsername', 'aria-describedby' => 'usernameHelp', 'placeholder' => 'Enter Password Again', 'name' => 'pword1']) ?>
                  <?php
                    if(form_error('pword1')) {
                      echo form_error('pword1');
                    }
                  ?>
                </div>
              </div>
            </div>
            <?= form_submit(['class' => 'btn btn-primary btn-block', 'type' => 'submit', 'value' => 'Register']) ?>
          <?= form_close(); ?>
          <div class="text-center">
            <?= anchor('login', 'Login Page', ['class' => 'd-block small mt-']); ?>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

<?php include 'public_footer.php'; ?>
