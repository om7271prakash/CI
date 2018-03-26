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
          <table class="table table-bordered admin-dashboard-articles-table" id="" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="width:10%">ID</th>
                <th style="width:70%">TITLE</th>
                <th style="width:20%">ACTION</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0; if(count($articles)) {
                 $count = $this->uri->segment(3, 0);
                 foreach ($articles as $article) { ?>
                  <tr>
                    <td><?= ++$count; ?></td>
                    <td><?= $article['title'] ?></td>
                    <td>
                      <div class="row">
                        <div class="col-md-6">
                          <?= anchor("admin/edit_article/{$article['id']}", 'Edit', ['class' => 'btn btn-primary']) ?>
                        </div>
                        <div class="col-md-6">
                          <?=
                            form_open('admin/delete_article'),
                            form_hidden("article_id", $article['id']),
                            form_submit(['type' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
                            form_close();
                          ?>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              <?php }else { ?>
                <td colspan="3">No Record Found</td>
              <?php } ?>
            </tbody>
          </table>
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'admin_footer.php' ?>
