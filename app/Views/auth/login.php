  <?= $this->extend('layout/templateNoNav'); ?>

  <?= $this->section('content'); ?>

  <body>
    <!-- header -->
    <div class="container text-center position-absolute top-50 start-50 translate-middle" id="index">
      <div class="row justify-content-center">
        <div class="col" id="header">
          <img class="img-fluid" id="logo" src="https://www.kawatama.com/kawatama/images/favicon.png" alt="">
          <img class="img-fluid" src="https://www.kawatama.com/assets/images/setting/_Logo%20241%20x%2042.png" alt="">
          <h1>Junior Programmer Assessment</h1>
        </div>
      </div>
      <?= view('Myth\Auth\Views\_message_block') ?>

      <!-- form login -->
      <form action="<?= url_to('login') ?>" method="post">
        <?= csrf_field() ?>

        <!-- form username email -->
        <div class="form-group row justify-content-center">
          <div class="col-md-6 mb-2">
            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
            <div class="invalid-feedback">
              <?= session('errors.login') ?>
            </div>
          </div>
        </div>

        <!-- form password -->
        <div class="form-group row justify-content-center">
          <div class="col-md-6 mb-2">
            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
            <div class="invalid-feedback">
              <?= session('errors.password') ?>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-2">Masuk</button>
      </form>

      <p>Belum memiliki akun? <a href="<?= url_to('register') ?>">Buat akun</a></p>
    </div>

    <?= $this->endSection(); ?>