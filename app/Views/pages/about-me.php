<?= $this->extend('components/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('components/header'); ?>
<div class="w-100 p-3 bg-dark">
  <div data-aos="fade-down" class="container d-flex flex-column align-items-center justify-content-center text-light" style="min-height: 78vh;">
    <img src="assets/img/Profile Picture.png" width="350" />
    <h3 style="font-weight: 600;">Satrio Ponco Sushadi</h3>
    <p style="text-align: center;">I am a technology enthusiast and Hacktiv8 graduate. Put my efforts, money and energy into tech since it's my passion. I wanna be on top level of tech industries and learn all i can into programming. Some say dreams can't come true but i believe it will.</p>
  </div>
</div>
<?= $this->include('components/footer'); ?>
<?= $this->endSection(); ?>