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
      <a class="navbar-brand" href="<?= base_url('/'); ?>">Articles</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/login'); ?>">
              <i class="fa fa-fw fa-sign-in"></i>Login</a>
          </li>
        </ul>
      </div>
    </nav>
