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
            <li><a class="dropdown-item text-colour" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-colour" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-colour" href="contactus.php">Contact us</a>
        </li>
      </ul>

      <body>

        <head>
          <meta charset='UTF-8'>
          <title>Search Bar Demo</title>
          <form role="search" id="form" class="navbar navbar-nav nav-link:hover button-hover ">
            <input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content">
            <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
            <Br>
            <button class="button-outline-success button-hover" type="submit">Search</button>

            <script>
              const f = document.getElementById('form');
              const q = document.getElementById('query');
              const google = '';
              const site = 'http://localhost/2dtproject/';

              function submitted(event) {
                event.preventDefault();
                const url = google + site + q.value + ".php";
                const win = window.open(url, '_blank');
                win.focus();
              }

              f.addEventListener('submit', submitted);
            </script>
        </head>
      </body>
    </div>
  </div>
</nav>
<!-- End of Navbar -->