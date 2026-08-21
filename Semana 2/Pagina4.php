<?php
  // Variables PHP usadas en la página
  $tituloPagina = "carrusel";
  $anioActual = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo $tituloPagina; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      padding-top: 76px; /* espacio para que el contenido no quede debajo del navbar fijo */
      background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1, #8fd3f4);
      font-family: 'Trebuchet MS', sans-serif;
    }
    h1.titulo {
      text-align: center;
      color: #ffffff;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
      font-weight: bold;
      font-size: 3em;
      margin-bottom: 30px;
    }
    main {
      padding: 20px;
      min-height: 300px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      color: #ffffff;
      font-weight: bold;
      background: linear-gradient(160deg, #43cea2, #185a9d);
    }
    footer.site-footer {
      margin-top: 30px;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      background: linear-gradient(160deg, #414345, #232526);
      color: #ffffff;
      text-align: center;
      font-weight: bold;
    }
    #demo {
      margin-top: 25px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    #demo .carousel-inner img {
      height: 400px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="Pagina1.php">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="Pagina2.php">Página 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Pagina3.php">Página 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Pagina4.php">Página 4</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Más páginas</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Pagina4.php">Página 4</a></li>
              <li><a class="dropdown-item" href="Pagina5.php">Página 5</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="login-btn-open btn btn-primary" href="Pagina1.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h1 class="titulo"><?php echo $tituloPagina; ?></h1>

  <div class="container">
    <main>
      <h1>Miniaturas</h1>
      <p>Las miniaturas que se ven en el carrusel de abajo son pintadas por mi persona, aqui solo se ven unas pocas y cada una tiene una tecnica disitnta de pintado.</p>
    </main>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/IMG1.png" alt="icon Barear" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/IMG2.jpg" alt="The Plague marine Gang" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/IMG3.jpg" alt="Blood Herald" class="d-block w-100">
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <footer class="site-footer container-fluid">
    &copy; <?php echo $anioActual; ?> - Todos los derechos reservados
  </footer>

</body>
</html>
