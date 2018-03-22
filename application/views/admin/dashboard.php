<?php include 'admin_header.php' ?>
<div style = "margin-top:6%"></div>
<div class="container-fluid">
  <?php if ( $feedback = $this->session->flashdata('feedback') ) {  ?>
    <div class="mx-auto col-md-5 mt-3 alert <?= $this->session->flashdata('feedback_class'); ?> text-center">
      <?= $feedback ?>
    </div>
  <?php } ?>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Admin Panel Articles
      <?= anchor('admin/add_article', 'Add Article', ['class' => 'btn btn-primary pull-right']) ?>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-10 offset-md-1">
          <table class="table table-bordered admin-dashboard-articles-table" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>ACTION</th>
              </tr>
            </tfoot>
            <tbody>
              <?php if(count($articles)) { ?>
                <?php foreach ($articles as $article) { ?>
                  <tr>
                    <td><?= $article['id'] ?></td>
                    <td><?= $article['title'] ?></td>
                    <td>
                      <a href="#" class="btn btn-primary">Edit</a>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php } ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'admin_footer.php' ?>
