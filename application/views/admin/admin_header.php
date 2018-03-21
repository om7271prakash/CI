<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Articles Admin Panel</title>

    <?= link_tag('assets/css/bootstrap/bootstrap.min.css'); ?>
    <?= link_tag('assets/css/font-awesome/css/font-awesome.min.css'); ?>
    <?= link_tag('assets/css/datatable/dataTables.bootstrap4.css'); ?>
    <?= link_tag('assets/css/custom.css'); ?>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?= base_url('/admin/dashboard'); ?>">Admin Panel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/logout'); ?>">
              <i class="fa fa-fw fa-sign-in"></i>Logout</a>
          </li>
        </ul>
      </div>
    </nav>
