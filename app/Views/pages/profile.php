   <?= $this->extend('layout/template'); ?>

   <?= $this->section('content'); ?>

   <div class="container" id="main">
     <div class="alert alert-danger text-center" role="alert">
      !!!Dalam tahap maintenance, belum bisa digunakan!!!
     </div>
     <form action="" method="post">
       <?= csrf_field(); ?>
       <h2>Profil User</h2>
       <p></p>
       <div class="row">
         <div class="col-md-4">
           <input type="hidden" name="id" value=" ">
           <label for="nama">Nama :</label>
           <input class="form-control mb-2" type="text" placeholder="" name="nama" required>
           <label for="nama">Username :</label>
           <input class="form-control mb-2" type="text" placeholder="" name="user" required>
           <label for="nama">Password :</label>
           <input class="form-control mb-4" type="password" placeholder="Password" name="pass" required>
           <div class="row justify-content-center">
             <div class="col-md-5">
               <input class="btn btn-primary btn-lg" type="submit" value="Simpan">
             </div>
           </div>
         </div>
       </div>
     </form>
   </div>

   <?= $this->endSection(); ?>