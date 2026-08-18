<?php
  // Variables PHP usadas en la página
  $tituloPagina = "Prueba de Bootstrap";
  $anioActual = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $tituloPagina; ?></title>
  <!-- Bootstrap 3 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 20px;
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
      background: linear-gradient(90deg, #ff512f, #dd2476, #f7b733, #4facfe, #43e97b);
      background-size: 300% 300%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: colorShift 5s ease infinite;
    }
    @keyframes colorShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    aside, main {
      padding: 20px;
      min-height: 300px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      color: #ffffff;
      font-weight: bold;
    }
    aside {
      background: linear-gradient(160deg, #f857a6, #ff5858);
    }
    main {
      background: linear-gradient(160deg, #43cea2, #185a9d);
    }

    .carousel-wrapper {
      margin-top: 25px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    .carousel-wrapper .item img {
      width: 100%;
      max-height: 350px;
      object-fit: cover;
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

    .login-btn-open {
      width: auto;
    }
    /* Full-width input fields dentro del modal de login */
    .login-modal input[type=text],
    .login-modal input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    .login-modal .login-btn {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    .login-modal .login-btn:hover {
      opacity: 0.8;
    }
    .login-modal .login-cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    .login-imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }
    .login-modal img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    .login-container {
      padding: 16px;
    }
    .login-modal span.psw {
      float: right;
      padding-top: 16px;
    }
    .login-modal {
      display: none;
      position: fixed;
      z-index: 1050;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
      padding-top: 60px;
    }
    .login-modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      border: 1px solid #888;
      width: 80%;
      max-width: 380px;
    }
    .login-close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }
    .login-close:hover,
    .login-close:focus {
      color: red;
      cursor: pointer;
    }
    .login-animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
    }
    @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
    }
    @media screen and (max-width: 300px) {
      .login-modal span.psw {
         display: block;
         float: none;
      }
      .login-modal .login-cancelbtn {
         width: 100%;
      }
    }
  </style>
</head>
<body>

  <h1 class="titulo"><?php echo $tituloPagina; ?></h1>

  <div class="container">

    <div class="row">
      <div class="col-xs-12 text-center">
        <button type="button" class="login-btn-open btn btn-lg btn-primary" onclick="document.getElementById('loginModal').style.display='block'">
          Login
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div id="miCarousel" class="carousel slide carousel-wrapper" data-ride="carousel">
          <!-- Indicadores -->
          <ol class="carousel-indicators">
            <li data-target="#miCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#miCarousel" data-slide-to="1"></li>
            <li data-target="#miCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="https://images.teepublic.com/derived/production/designs/4037749_0/1547913797/i_m:pid_487,c_77_76_887x1108,bc_ffffff,ar_4x5,o_portrait,pm_4,s_630,q_90.jpg" alt="Slide 1">
              <div class="carousel-caption">Slide 1</div>
            </div>
            <div class="item">
              <img src="https://media.tenor.com/lxSjtlze2CsAAAAM/skeleton-mad-skeleton.gif" alt="Slide 2">
              <div class="carousel-caption">Slide 2</div>
            </div>
            <div class="item">
              <img src="https://media1.giphy.com/media/v1.Y2lkPTZjMDliOTUyZTMwNzI4cmFpdjMyMjltaTJjbTI1ODRoanFqaDhuYWNhb2kyZzRmMSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/gsKe9hyAuoZH2/giphy.gif" alt="Slide 3">
              <div class="carousel-caption">Slide 3</div>
            </div>
          </div>

          <!-- Controles -->
          <a class="left carousel-control" href="#miCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#miCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 25px;">
      <aside class="col-xs-12 col-sm-4 col-lg-3">
        Contenido secundario
        <img src="https://media2.giphy.com/media/v1.Y2lkPTZjMDliOTUyYzcyZ2VsanU1YjFnN3lubjMwdDcxc2Z1eDllcnkwMDhwZndqMHpzZCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/o7mLSkGYCu9Pi/200w.gif" alt="Imagen decorativa" class="img-responsive" style="margin-top: 15px; border-radius: 8px;">
      </aside>

      <main class="col-xs-12 col-sm-8 col-lg-9">
        Contenido principal
        <img src="https://i.pinimg.com/originals/50/54/c5/5054c5508d87bd257986b7877641bbd8.gif" alt="Imagen decorativa" class="img-responsive" style="margin-top: 15px; border-radius: 8px;">
      </main>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="row">
        <div class="col-xs-12">
          <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
              <!-- Links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 3</a>
                </li>
              </ul>
            </div>
          </nav>
          <p style="margin-top: 10px; font-weight: normal;">&copy; <?php echo $anioActual; ?> - Todos los derechos reservados</p>
        </div>
      </div>
    </footer>

  </div>

  <!-- Modal de Login -->
  <div id="loginModal" class="login-modal">

    <form class="login-modal-content login-animate" action="/action_page.php" method="post">
      <div class="login-imgcontainer">
        <span onclick="document.getElementById('loginModal').style.display='none'" class="login-close" title="Close Modal">&times;</span>
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Avatar" class="avatar">
      </div>
      <div class="login-container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" class="login-btn">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
      <div class="login-container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('loginModal').style.display='none'" class="login-cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    // Cerrar el modal de login al hacer clic fuera de él
    var loginModal = document.getElementById('loginModal');
    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
        }
    }
  </script>
</body>
</html>
