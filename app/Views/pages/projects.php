<?= $this->extend('components/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('components/header'); ?>
<div class="w-100 p-3 bg-dark">
  <div class="container mt-4 mb-4">
    <div class="row">
      <div data-aos="fade-down" class="col-12 col-lg-6 d-flex flex-column align-items-center justify-content-center">
        <img src="assets/img/Typing-Animated.gif" width="300" />
        <p class="fs-2 text-info text-shadow" style="font-weight: 600">My Projects</p>
      </div>
      <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
        <ul data-aos="fade-left" class="list-group">
          <?php foreach ($projects as $project) : ?>
            <li class="list-group-item bg-info bg-gradient">
              <div class="p-2">
                <p class="fs-4" style="font-weight: 600"><?= $project['projectname']; ?></p>
                <div class="d-flex flex-row align-items-center">
                  <a <?= "href=" . $project['projecturl']; ?>>
                    <img <?= "src=" . $project['img']; ?> <?php if ($project['projectname'] === 'Find-A-Friend') {
                                                            echo "width='100'";
                                                          } else {
                                                            echo "width='200'";
                                                          } ?> style="border-radius: 20px">
                  </a>
                  <p class="ms-3"><?= $project['description']; ?></p>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  <?= $this->include('components/footer'); ?>
  <?= $this->endSection(); ?>