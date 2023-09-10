<?= $this->extend('components/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('components/header'); ?>
<div class="w-100 p-3 bg-dark">
  <div class="container mt-4 mb-4">
    <div class="row">
      <div data-aos="fade-down" class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/Profile Picture.png" width="500" />
      </div>
      <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
        <h1 class="text-info" id="myname"></h1>
        <p data-aos="fade-left" class="text-light">My name is Satrio Ponco Sushadi and I am a software developer. Some frameworks that i use are ReactJS, React Native, VueJS, ExpressJS, NodeJS and Codeigniter.</p>
        <p data-aos="fade-left" class="text-light">Feel free to contact me!</p>
      </div>
    </div>
  </div>
</div>
<?= $this->include('components/footer'); ?>
<script type="text/javascript">
  const _CONTENT = ["I am Satrio Ponco Sushadi.", "I am a developer.", "I am a sofware engineer."];

  let _PART = 0;
  let _PART_INDEX = 0;
  let _INTERVAL_VAL;
  const _ELEMENT = document.getElementById("myname");

  function Type() {
    let text = _CONTENT[_PART].substring(0, _PART_INDEX + 1);
    _ELEMENT.innerHTML = text;
    _PART_INDEX++;

    if (text === _CONTENT[_PART]) {
      clearInterval(_INTERVAL_VAL);
      setTimeout(function() {
        _INTERVAL_VAL = setInterval(Delete, 50);
      }, 1000);
    }
  }

  function Delete() {
    let text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
    _ELEMENT.innerHTML = text;
    _PART_INDEX--;

    if (text === '') {
      clearInterval(_INTERVAL_VAL);

      if (_PART == (_CONTENT.length - 1))
        _PART = 0;
      else
        _PART++;
      _PART_INDEX = 0;

      setTimeout(function() {
        _INTERVAL_VAL = setInterval(Type, 100);
      }, 200);
    }
  }

  _INTERVAL_VAL = setInterval(Type, 100);
</script>
<?= $this->endSection(); ?>