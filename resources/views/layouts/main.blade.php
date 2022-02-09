<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/scripts.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg static-top nav-bg-color link-color">
    <div class="container">
      <a class="navbar-brand logo-img" href="#">
        <img src="img/logotransparent.png" alt="...">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list btn-outline-green" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="link-nav" href="#">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="link-nav" href="#">Sobre mim</a>
          </li>
          <li class="nav-item">
            <a class="link-nav" href="#">Dietas/E-books</a>
          </li>
          </li>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn-consulta my-2 my-sm-0" type="submit">Agendar Consulta</button>
          </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget subscribe no-box">
              <h5 class="widget-title">Luiz Roberto<span></span></h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod temporibus eos, id amet nesciunt consequatur. Impedit atque iusto hic repellat odio delectus eum distinctio? Veritatis hic nesciunt explicabo voluptatem iure!</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Páginas<span></span></h5>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content"><a href="#.">&nbsp;Página Inicial</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#.">&nbsp;Sobre mim</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#.">&nbsp;Dietas/E-books</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#.">&nbsp;Consulta</a></div>
                </li>
                <li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Redes Sociais<span></span></h5>
              <a href="https://www.facebook.com/profile.php?id=100073237146517"> <i class="fa fa-facebook"> </i> </a>
              <a href="https://www.instagram.com/nutriluizroberto/"> <i class="fa fa-instagram"> </i> </a>
              <a href="https://api.whatsapp.com/message/TGXNUECQVINCF1?autoload=1&app_absent=0"> <i class="fa fa-whatsapp"> </i> </a>
            </div>
          </div>
          <br>
          <br>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Localização<span></span></h5>
              <i class="bi bi-geo-alt-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>Clínica Zanini ( Avenida 25. Entre as ruas 12 x 14, n°550, Paranoá , Guaíra - SP )</i>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container-flex">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>Luiz Roberto ©2022.</p>
              </div>
            </div>
          </div>
        </div>
  </footer>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/message/TGXNUECQVINCF1?autoload=1&app_absent=0" class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
  </a>
</body>
</html>