<?php include('public_header.php'); ?>

<div style = "margin-top:6%"></div>
<div class="container">
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <h4><?= $article->title;  ?></h4>
      </div>
      <div class="float-right">
        <?= date('d M y H:i:s', strtotime($article->created_at)); ?>
      </div>
    </div>
    <div class="card-body"><?= $article->body; ?></div>
  </div>
</div>

<?php include('public_footer.php') ?>
