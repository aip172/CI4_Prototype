  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>

  <div class="container" id="main">
    <div class="row">
      <div class="col">
        <h2>Detail asesi</h2>
        <div class="card mb-3" id="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img id="detail-foto" src="/img/<?= $asesi['foto'] ?>" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"> <?= $asesi['nama_asesi']; ?> </h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis, minima numquam voluptatem sapiente ullam quidem nesciunt adipisci et sequi eum exercitationem maxime dolores, voluptates suscipit. Molestias quasi beatae pariatur!</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>