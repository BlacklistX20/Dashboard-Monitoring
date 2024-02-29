<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid mx-1 py-1">
   <div class="row my-2">
      <div class="col-6 text-start">
         <h2 class="fw-bold">Level</h2>
         <h2 class="fw-bold">BBM</h2>
      </div>
      <div class="col-6 text-end">
         <h2 class="fw-bold">09 : 45 AM</h2>
         <h4>Senin, 29 Januari 2024</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-5 text-center mt-3 border">
         <h2>Tangki Harian</h2>
         <div class="row">
            <div class="col-6">
               <h4 class="fw-bold mb-3">500 L / 1000 L</h4>
               <div class="border border-2 w-80 vh-75 rounded-4 mx-auto border-dark"></div>
            </div>
            <div class="col-6">
               <h4 class="fw-bold mb-3">500 L / 1000 L</h4>
               <div class="border border-2 w-80 vh-75 rounded-4 mx-auto border-dark"></div>
            </div>
         </div>
      </div>
      <div class="col-7 text-center mt-3 border">
         <h2>Tangki Bulanan</h2>
         <div class="row">
            <div class="col-4">
               <h4 class="fw-bold mb-3">500 L / 1000 L</h4>
               <div class="border border-2 w-80 vh-75 rounded-4 mx-auto border-dark"></div>
            </div>
            <div class="col-4">
               <h4 class="fw-bold mb-3">500 L / 1000 L</h4>
               <div class="border border-2 w-80 vh-75 rounded-4 mx-auto border-dark"></div>
            </div>
            <div class="col-4">
               <h4 class="fw-bold mb-3">500 L / 1000 L</h4>
               <div class="border border-2 w-80 vh-75 rounded-4 mx-auto border-dark"></div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('footer'); ?>

<!-- Custom JS -->
<!-- <script src="<?= base_url('scriptFuel.js'); ?>"></script> -->

</body>

</html>
<?= $this->endSection(); ?>