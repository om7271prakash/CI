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
              <?php $i = 0; if(count($articles)) { ?>
                <?php foreach ($articles as $article) { ?>
                  <tr>
                    <td><?= ++$i ?></td>
                    <td><?= $article['title'] ?></td>
                    <td>
                      <?= anchor("admin/edit_article/{$article['id']}", 'Edit', ['class' => 'btn btn-primary']) ?>
                      <?= anchor("admin/delete_article/{$article['id']}", 'Delete', ['class' => 'btn btn-danger']) ?>
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
