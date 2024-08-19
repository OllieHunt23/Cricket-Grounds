<!-- Start of Navbar -->
<nav class="navbar navbar-expand-lg bg-colour navbar">
  <div class="container-fluid">
    <a class="navbar-brand text-colour" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-colour" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-colour" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Colleges
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-colour" href="#">Rongotai</a></li>
            <li><a class="dropdown-item text-colour" href="#">Wellington College</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-colour" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-colour" href="contactus.php">Contact us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" id="query" name="q"
          placeholder="Search College"
          aria-label="Search">
        <button class="btn btn-outline-success button-hover" type="submit">Search</button>
        <script>
          const f = document.getElementById('form');
          const q = document.getElementById('query');
          const google = 'https://www.google.com/search?q=site%3A+';
          const site = 'http://localhost/2dtproject/index.php';

          function submitted(event) {
            event.preventDefault();
            const url = google + site + '+' + q.value;
            const win = window.open(url, '_blank');
            win.focus();
          }

          f.addEventListener('submit', submitted);
        </script>
      </form>
    </div>
  </div>
</nav>
<!-- End of Navbar -->