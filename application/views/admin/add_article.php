<?php include 'admin_header.php' ?>
<div style = "margin-top:10%"></div>
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add Article</div>
      <div class="card-body">
        <?= form_open('admin/add_article', []); ?>
        <?= form_hidden('user_id', $this->session->userdata('id')); ?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="articleTitle">Article Title :</label>
              </div>
              <div class="col-md-9">
                <?= form_input(['type' => 'text', 'id' => 'articleTitle', 'name' => 'title', 'placeholder' => 'Enter Article Title Here...', 'class' => 'form-control']); ?>
                <?php
                  if(form_error('title')) {
                    echo form_error('title');
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="articleBody">Article Body :</label>
              </div>
              <div class="col-md-9">
                <?= form_textarea(['type' => 'textarea', 'id' => 'articleBody', 'name' => 'body', 'placeholder' => 'Enter Article Body Here...', 'class' => 'form-control']); ?>
                <?php
                  if(form_error('body')) {
                    echo form_error('body');
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 offset-md-4">
            <?= form_submit(['class' => 'btn btn-primary btn-block', 'type' => 'submit', 'value' => 'Upload' ]); ?>
          </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>

<?php include 'admin_footer.php' ?>
