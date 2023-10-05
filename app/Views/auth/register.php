  <?= $this->extend('layout/templateNoNav'); ?>

  <?= $this->section('content'); ?>

  <body>
    <!-- header -->
    <div class="container text-center position-absolute top-50 start-50 translate-middle" id="index">
      <div class="row justify-content-center">
        <div class="col" id="header">
          <h1>Buat akun user baru</h1>
        </div>
      </div>
      <?= view('Myth\Auth\Views\_message_block') ?>

      <!-- form signup -->
      <form action="<?= url_to('register') ?>" method="post">
        <?= csrf_field() ?>

        <!-- form email -->
        <div class="form-group row justify-content-center">
          <div class="col-md-6 mb-3">
            <input class="form-control<?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
            <small id="emailHelp" class="form-text text-muted">Email hanya untuk formalitas, boleh ngasal</small>
          </div>
        </div>

        <!-- form username -->
        <div class="form-group row justify-content-center">
          <div class="col-md-6 mb-3">
            <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" placeholder="Username" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" autocomplete="off" required>
          </div>
        </div>

        <!-- form password -->
        <div class="form-group row justify-content-center">
          <div class="col-md-3 mb-3">
            <input class=" form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required>
          </div>

          <!-- form confirm password -->
          <div class="col-md-3 mb-3">
            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-3">Buat akun</button>
      </form>
      <p>Sudah memiliki akun? <a href="<?= url_to('login') ?>">Masuk</a></p>
    </div>

    <?= $this->endSection(); ?>