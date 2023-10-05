  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>

  <div class="container" id="main">
    <div class="row justifiy-content-center">

      <div class="col">
        <h2>Tambah data asesi</h2>
        <p></p>
      </div>

      <form action="/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <!-- form nama -->
        <div class="form-group row">
          <div class="col-md-6 mb-2">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" name="nama_asesi" placeholder="" required>
          </div>
        </div>

        <!-- form foto -->
        <div class="form-group row">
          <label for="foto">Foto profile :</label>
          <div class="col-md-6 mb-2">
            <div class="input-group">
              <input type="file" class="form-control" id="inputGroupFile02" name="foto">
              <label class="input-group-text" for="foto">Upload</label>
            </div>
          </div>
        </div>

        <!-- form posisi -->
        <div class="form-group row">
          <div class="col-md-6 mb-2">
            <label for="posisi">Posisi :</label>
            <input class="form-control" type="text" placeholder="" name="posisi">
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-2">Simpan</button>
      </form>
    </div>
  </div>


  <?= $this->endSection(); ?>