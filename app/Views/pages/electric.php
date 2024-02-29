<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid mx-1 py-1">
  <div class="row my-2">
    <div class="col-6 text-start">
      <h2 class="fw-bold">Electricity</h2>
      <h2 class="fw-bold">Ruangan</h2>
    </div>
    <div class="col-6 text-end">
      <h2 class="fw-bold">09 : 45 AM</h2>
      <h4>Senin, 29 Januari 2024</h4>
    </div>
  </div>
  
  <?= $this->include('layout/panel_electric'); ?>

</div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('footer'); ?>

<!-- Custom JS -->
<script src="<?= base_url('scriptElec.js'); ?>"></script>

</body>

</html>
<?= $this->endSection(); ?>