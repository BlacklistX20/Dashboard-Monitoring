<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Monitoring TTC</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('style.css'); ?>" />

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="<?= base_url('src\bootstrap-5.3.3-dist\css\bootstrap.min.css'); ?>">

</head>

<body>
  <div class="d-flex">
    <div class="d-flex flex-column bg-danger c-sidebar rounded-end-4">
      <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
          <a href="<?= base_url('/'); ?>" role="button" class="nav-link btn btn-danger p-2 mb-5 fa-lg mt-2">
            <img class="img-fluid" src="<?= base_url('src\img\home.png'); ?>" alt="Home">
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/temp'); ?>" role="button" class="nav-link btn btn-danger p-2 mb-3 fa-lg">
            <img class="img-fluid" src="<?= base_url('src\img\temperature.png'); ?>" alt="temperature">
          </a>
        </li>
        <li>
          <a href="<?= base_url('/electric'); ?>" role="button" class="nav-link btn btn-danger p-2 mb-3 fa-lg">
            <img class="img-fluid" src="<?= base_url('src\img\electrical.png'); ?>" alt="Electricity">
          </a>
        </li>
        <li>
          <a href="<?= base_url('/fuel'); ?>" role="button" class="nav-link btn btn-danger p-2 mb-3 fa-lg">
            <img class="img-fluid" src="<?= base_url('src\img\Fuel Level2.png'); ?>" alt="Fuel">
          </a>
        </li>
      </ul>
    </div>

<?= $this->renderSection('content'); ?>

    <!-- jQuery -->
    <script src="<?= base_url('jquery-3.7.1.min.js'); ?>"></script>

    <!-- chart.js -->
    <script src="<?= base_url('src\chart.js-4.4.1\node_modules\chart.js\dist\chart.umd.js'); ?>"></script>

    <!-- bootstrap .js -->
    <script src="<?= base_url('src\bootstrap-5.3.3-dist\js\bootstrap.min.js'); ?>"></script>

<?= $this->renderSection('footer'); ?>