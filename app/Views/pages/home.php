  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>

  <div class="container" id="main">
    <div class="row justify-content-center">
      <div class="col">
        <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif ?>
        <h2>Daftar Asesi</h2>
        <p></p>
        <a href="/create" class="btn btn-primary mb-3">Tambah data asesi</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Foto</th>
              <th scope="col">Nama</th>
              <th scope="col">Posisi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($asesi as $a) : ?>
              <tr>
                <th scope='row'> <?= $i++; ?> </th>
                <td><img class="rounded-circle" src="/img/<?= $a['foto']; ?>" alt="Foto" id="foto"></td>
                <td style='word-wrap: break-word;min-width: 100px;max-width: 100px;'> <?= $a['nama_asesi']; ?> </td>
                <td> <?= $a['posisi']; ?> </td>
                <td>
                  <a href=" /detail/<?= $a['slug'] ?> " class=" btn btn-primary">Detail</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>