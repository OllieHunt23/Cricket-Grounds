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

      <head>
        <meta charset='UTF-8'>
        <title>Search Bar Demo</title>
        <style>
          body {
            background-color: #3745c2;
            margin: 200px 40%;
          }

          form {
            background-color: #4654e1;
            width: 300px;
            height: 44px;
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            align-items: center;
          }

          input {
            all: unset;
            font: 16px system-ui;
            color: #fff;
            height: 100%;
            width: 100%;
            padding: 6px 10px;
          }

          ::placeholder {
            color: #fff;
            opacity: 0.7;
          }

          svg {
            color: #fff;
            fill: currentColor;
            width: 24px;
            height: 24px;
            padding: 10px;
          }

          button {
            all: unset;
            cursor: pointer;
            width: 44px;
            height: 44px;
          }
        </style>
      </head>

      <body>
        <form role="search" id="form">
          <input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content">
          <button>
            <svg viewBox="0 0 1024 1024">
              <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
            </svg>
          </button>
        </form>
        <script>
          const f = document.getElementById('form');
          const q = document.getElementById('query');
          const google = 'http://localhost/2dtproject/search?q=site%3A+.php';
          const site = 'index.php';

          function submitted(event) {
            event.preventDefault();
            const url = google + site + '+' + q.value;
            const win = window.open(url, '_blank');
            win.focus();
          }

          f.addEventListener('submit', submitted);
        </script>
      </body>
    </div>
  </div>
</nav>
<!-- End of Navbar -->