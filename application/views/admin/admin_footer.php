<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <?= anchor('login/logout', 'Logout', ['class' => 'btn btn-primary']) ?>

      </div>
    </div>
  </div>
</div>




<script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/datatables/jquery.dataTables.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/datatables/dataTables.bootstrap4.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/custom.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/custom-datatables.js'); ?>"></script>

</body>
</html>
