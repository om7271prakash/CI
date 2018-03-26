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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <?= anchor('/', 'Articles', ['class'=> 'navbar-brand']); ?>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <?= form_error('query', "<p class = 'navbar-text text-danger'>", "</p>"); ?>
          </li>
          <li class="nav-item">
            <?= form_open('user/search', ['class' => 'form-inline my-2 my-lg-0 mr-lg-2']); ?>
              <div class="input-group">
                <input class="form-control" name = "query" type="text" placeholder="Search for...">
                <span class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            <?= form_close(); ?>
          </li>
          <li class="nav-item">
            <?php if(!$this->session->userdata('id')){ ?>
              <?= anchor('/login', '<i class="fa fa-fw fa-sign-in"></i>Login', ['class' => 'nav-link']); ?>
            <?php }else { ?>
              <?= anchor('', '<i class="fa fa-fw fa-sign-out"></i>Logout</a>', ['class' => 'nav-link', 'data-toggle' => 'modal', 'data-target' => '#exampleModal']); ?>
            <?php  } ?>

          </li>
        </ul>
      </div>
    </nav>
