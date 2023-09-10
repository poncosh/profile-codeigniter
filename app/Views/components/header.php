<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="/">S</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
      <ul class="navbar-nav text-center">
        <li class="navbar-item">
          <a href="/" <?php if (service('uri') == base_url() . 'index.php/') {
                        echo 'class="nav-link active"';
                      } else {
                        echo 'class="nav-link"';
                      }; ?>>
            Introduction
          </a>
        </li>
        <li class="navbar-item">
          <a href="/projects" <?php if (service('uri') == base_url() . 'index.php/projects') {
                                echo 'class="nav-link active"';
                              } else {
                                echo 'class="nav-link"';
                              }; ?>>
            Projects
          </a>
        </li>
        <li class="navbar-item">
          <a href="/about-me" <?php if (service('uri') == base_url() . 'index.php/about-me') {
                                echo 'class="nav-link active"';
                              } else {
                                echo 'class="nav-link"';
                              }; ?>>
            About Me
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>