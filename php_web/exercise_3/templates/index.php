<!DOCTYPE html>
<!--[if lt IE 7]><html lang="es" class="lt-ie10 lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="es" class="lt-ie10 lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="es" class="lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html lang="es" class="lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="es">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sitio externo del Gobierno de la Ciudad de Buenos Aires.">
  <meta name="author" content="Gobierno de la Ciudad de Buenos Aires">
  <title>Gobierno de la Ciudad de Buenos Aires</title>
  <link rel="shortcut icon" href="imagenes/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="imagenes/favicon-mobile.png">
  <link rel="stylesheet" href="../static/BAstrap7/bastrap3/bootstrap.min.css">
  <link rel="stylesheet" href="../static/BAstrap7/bastrap3/bastrap.css">
  <!-- ESTILOS EXTRA -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
    .h1 footer-row {
      color: #fff;
    }

    .footer-row {
      margin-bottom: 20px;
    }

    /* Logos */
    .container-ba {
      border-right: solid 1px #666
    }

    /* contenedor links */
    .footer-nav {
      margin-top: 70px;
      margin: 10px;


    }

    /* contenedor redes */
    .container-redes {
      width: 250px;
      margin: 0 auto;
    }

    /* contenedor ciudad */
    .container-ciudad {
      align-content: center;
      border-top: solid 1px #666;
      margin-top: 50px;
    }

    /* logo ciudad */
    .logo_footer {
      margin-top: 10px;
      width: 82%;
    }

    .logo_footer_ciudad {
      margin: 10px auto;
    }


    /* estilo listado de links */
    .primera_columna {
      padding-left: 0px;
    }

    .footer-nav ul {
      padding-left: 0px;
    }

    .footer-nav ul li {
      font-size: 14px;
      line-height: 16px;
      text-decoration: none;
    }

    .footer-nav ul li a {
      color: #ccc;
      font-family: "OpenSans", Helvetica, Arial, sans-serif;
      text-decoration: none;
      font-size: bold;
      line-height: 3em;

    }

    #ba-footer {
      padding: 60px 0;
      background: #333;
      margin-top: 20px;
    }


    /* contenedor teléfonos */
    .container-telefonos {
      border-top: solid 1px #666;
      margin-top: 100px;
      margin-bottom: 25px;

    }


    /* alinear glyphicon y h3 */
    .shortcut span,
    #ba-footer .shortcut span {
      color: #aaa;
      text-align: left;
      margin: 0;
      width: inherit;
      height: inherit;
      border-radius: 0;
      display: inline;
      margin: 10px;
      font-size: 30px !important;
      position: relative;
      -ms-behavior: url(../css/pie.htc);
    }

    #ba-footer .shortcut span {
      position: relative;
      top: 5px;
    }



    /* social */

    .mini-social a {
      width: 40px;
      height: 40px;
      display: inline-block;
      background-repeat: no-repeat;
      background-size: contain;
      text-indent: -9999px;
    }

    .social-fb {
      background-image: url(../static/BAstrap7/social/social-fb.png);
      background-image: url(../static/BAstrap7/social/social-fb.svg), none;
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .social-tw {
      background-image: url(../static/BAstrap7/social/social-tw.png);
      background-image: url(../static/BAstrap7/social/social-tw.svg), none;
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .social-gp {
      background-image: url(../static/BAstrap7/social/social-gp.png);
      background-image: url(../static/BAstrap7/social/social-gp.svg), none;
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .social-yt {
      background-image: url(../static/BAstrap7/social/social-yt.png);
      background-image: url(../static/BAstrap7/social/social-yt.svg), none;
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .social-fl {
      background-image: url(../static/BAstrap7/social/social-fl.png);
      background-image: url(../static/BAstrap7/social/social-fl.svg), none;
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .social-rss {
      background-image: url(../static/BAstrap7/social/social-rss.png);
      background-image: url(../static/BAstrap7/social/social-rss.svg), none;
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .social-cc {
      background-image: url(../static/BAstrap7/social/social-cc.png);
      /*background-image: url(social/social-cc.svg), none;*/
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
      margin-top: 8px;
    }

    .social-in {
      background-image: url(../static/BAstrap7/social/social-in.png);
      /*background-image: url(social/social-gp.svg), none;*/
      background-size: cover;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .social-fav {
      float: right !important;
      margin-right: 0 !important;
      font-size: 40px;
    }

    .social-fav a {
      color: #ccc;
      text-indent: 0;
    }

    .social-fav a.active,
    .social-fav a.corazonLleno {
      color: #d13f34;
    }

    .ba-social {
      display: table;
      /*margin: 0 auto;*/
      padding: 16px 0;
    }

    .ba-social ul {
      padding: 0;
    }

    .ba-social li {
      list-style: none;
      float: left;
      margin: 0 15px 16px 0;
    }

    .ba-social li:last-child {
      margin-right: 0;
    }

    .ba-social a {
      width: 60px;
      height: 60px;
      display: inline-block;
      background-repeat: no-repeat;
      background-size: contain;
      -ms-behavior: url(../static/BAstrap7/bastrap3/backgroundsize.min.htc);
    }

    .ba-medios a {
      width: 90px;
      height: 90px;
    }

    .footer-row .mini-social {
      width: auto;
    }

    @media (max-width:767px) {
      .footer-row .mini-social {
        width: auto;
        float: none;

      }
    }

    .mini-social {
      padding: 0;
      margin: 0;
      overflow: auto;
    }

    .mini-social li {
      list-style: none;
      float: left;
      margin-right: 10px;
      height: 40px;
      overflow: hidden;
    }

    .mini-social a:hover,
    .mini-social a:focus,
    .ba-social a:hover,
    .ba-social a:focus {
      opacity: 0.8;
    }

    .mini-social a:active,
    .ba-social a:active {
      opacity: 1;
    }

    @media (max-width: 560px) {
      .ba-social a {
        width: 60px;
        height: 60px;
      }
    }

    .footer-shortcuts {
      border-top: solid 1px #222;
      padding-top: 48px;
      padding-bottom: 48px;
    }

    /* shortcuts */
    .row-shortcut {
      margin: 30px 0 0 0;
    }

    .shortcut {
      text-align: center;
      text-decoration: none;
      padding-top: 24px;
      padding-bottom: 12px;
      color: #333;
      border-radius: 6px;
      position: relative;
      -ms-behavior: url(../static/BAstrap7/bastrap3/pie.htc);
      display: block;
      background-color: transparent;
    }

    .shortcut:hover,
    .shortcut:focus {
      background: #555555;
      text-decoration: none;
    }

    .shortcut:hover p,
    .shortcut:focus p {
      color: #e5e5e5;
    }


    .shortcut:active {
      background-color: #f1f1f1;
      text-decoration: none;
    }

    .bg-white-1 .shortcut:hover,
    .bg-white-1 .shortcut:focus {
      background: #e9e9e9;
    }

    .bg-white-1 .shortcut:active {
      background-color: #ccc;
    }

    .shortcut span {
      color: #fff;
      text-align: center;
      margin: 0 auto 24px auto;
      width: 30px;
      height: 30px;
      border-radius: 56px;
      position: relative;
      -ms-behavior: url(../static/BAstrap7/bastrap3/pie.htc);
      display: block;
    }

    .shortcut span.glyphicon {
      padding-top: 0px;
      font-size: 30px;
      top: 0px;
    }

    .shortcut p {
      color: #888;
    }

    .shortcut h3 {
      color: #fff;
      font-size: 32px;
      margin-bottom: 12px;
    }

    /* shortcut list + tramites + emergencias */

    .shortcut-list {
      text-align: left;
      overflow: auto;
      padding-top: 0;
      float: left;
    }

    .shortcut-list,
    .shortcut-list:hover,
    .shortcut-list:focus,
    .shortcut-list:active {
      background-repeat: repeat-y;
      background-position: 36px 0;
      background-image: url(../static/BAstrap7/buenosaires/assets/misc/step-bg.png);
      background-image: url(../static/BAstrap7/buenosaires/assets/misc/step-bg.svg), none;
      background-color: transparent;
    }

    .shortcut-list:last-of-type {
      background-image: none;
    }

    .shortcut-list span {
      float: left;
      margin-right: 30px;
      width: 80px;
      height: 80px;
      margin-bottom: 8px;
    }

    .shortcut-list span.h1 {
      padding-top: 18px;
    }

    .shortcut-list h3 {
      margin-top: 16px;
    }

    .shortcut-list p {
      margin-bottom: 0;
      color: #333;
      font-size: 16px;
      line-height: 24px;
    }

    .shortcut-list-step {
      float: left;
      width: 100px;
    }

    .lt-ie9 .shortcut-list-step {
      width: 98px;
    }

    .shortcut-list-info {
      float: left;
      margin-bottom: 16px;
    }

    .chosen-container {
      padding: 0px;
      width: 100% !important;
      border: 0px;
      box-shadow: none !important;
    }

    @media (max-width: 991px) {

      .shortcut-list,
      .shortcut-list:hover,
      .shortcut-list:focus,
      .shortcut-list:active {
        background-image: none;
      }

      .shortcut-list-info {
        width: 100%;
      }
    }

    @media (min-width: 992px) {
      .shortcut-list-info {
        width: 445px;
      }
    }

    @media (min-width:1200px) {
      .shortcut-list-info {
        width: 580px;
      }


    }

    .ba-emergencia .main-container>.container {
      padding-left: 30px;
      padding-right: 30px;
    }

    .ba-emergencia table {
      text-align: left;
    }

    /* shortcut normal */
    .row-shortcut {
      margin: 16px 0px;
    }

    @media (max-width: 767px) {

      .ba-home .main-container .shortcut p,
      .ba-home .shortcut-tramite {
        display: none;
      }

      .openid-connect-login-btn-top-bar {
        padding-left: 32px;
        margin-bottom: -10px;
      }

      .navbar-top.navbar-primary {
        padding-bottom: 0px;
      }
    }

    @media (max-width:991px) {
      .row-shortcut .col-sm-6:nth-of-type(2n+1) {
        clear: left;
      }

      .footer-nav {
        text-align: left;
      }

      .primera_columna {
        padding-left: 15px;
      }

      .container-redes {
        margin-top: 30px;
      }
    }
  </style>
</head>

<body>


  <div class="jumbotron jumbotron-misc jumbotron-main" style="background-color: #ccc;">
    <div class="container">
      <h1>Búsqueda de calles</h1>
      <p>Ingresa una url con parámetros para buscar calles sugeridas y esquinas cercanas.
      </p>
    </div>
  </div>


  <?php include("results.php")?>


  <footer id="ba-footer">

    <div class="container">
      <div class="row footer-row">

        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="col-xs-6">
            <div class="container-ba">
              <a href="http://www.buenosaires.gob.ar/"><img src="../static/BAstrap7/ba_vamosba_blanco.png"
                  class="img-responsive logo_footer"></a>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="container-ba-border">
              <a href="http://disfrutemosba.buenosaires.gob.ar/"><img src="../static/BAstrap7/ba_disfrutemos_blanco.png"
                  class="img-responsive logo_footer"></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">
          <section class="container-redes">
            <ul class="mini-social">
              <li><a class="social-fb" href="http://www.facebook.com/gcba" target="_blank">Facebook</a></li>
              <li><a class="social-tw" href="http://www.twitter.com/gcba" target="_blank">Twitter</a></li>
              <li><a class="social-yt" href="http://www.youtube.com/user/GCBA" target="_blank">Youtube</a></li>
              <li><a class="social-in" href="https://www.instagram.com/buenosaires/" target="_blank">Instagram</a></li>
              <li><a class="social-gp" href="https://plus.google.com/+GobiernodelaCiudaddeBuenosAires/"
                  target="_blank">Google+</a></li>
            </ul>
          </section>
        </div>
      </div>

      <div class="row footer-nav">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-3 col-sm-6 primera_columna">
            <ul>
              <li class=""><a href="http://mapa.buenosaires.gob.ar" title="">Mapa Buenos Aires</a></li>
              <li class=""><a href="http://reclamos.buenosaires.gob.ar/suaci/index"
                  title="Sistema unico de atencion ciudadana">Solicitudes / Denuncias </a></li>
              <li class=""><a href="http://www.agip.gov.ar/web/ventanillas/aplicativos/pat-01.htm" title="">Patentes:
                  Consulta e impresión de boletas</a></li>
              <li class=""><a href="http://www.agip.gov.ar/web/ventanillas/aplicativos/abl-2012.html" title="">ABL:
                  Consulta e impresión de boletas</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul>
              <li class=""><a href="/jefedegobierno" title="">Jefe de Gobierno</a></li>
              <li class=""><a href="/vicejefatura" title="">Vicejefatura de Gobierno</a></li>
              <li class=""><a href="http://www.buenosaires.gob.ar/jefaturadegabinete" title="">Jefatura de Gabinete</a>
              </li>
              <li class=""><a href="/ambienteyespaciopublico" title="">Ambiente y Espacio Público</a></li>
              <li class=""><a href="/cultura" title="">Cultura</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul>
              <li class=""><a href="http://boletinoficial.buenosaires.gob.ar/areas/leg_tecnica/boletinOficial/"
                  title="">Boletín Oficial</a></li>
              <li class=""><a href="/legalytecnica/normativa/formulario-de-busqueda" title="">Normativa</a></li>
              <li class=""><a href="http://www.buenosaires.gov.ar/organigrama/?menu_id=505" title="">Organigrama</a>
              </li>
              <li class=""><a href="http://www.buenosaires.gov.ar/organigrama/funcionarios/?menu_id=713" title="">Guía
                  de Funcionarios</a></li>

            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul>
              <li class=""><a href="http://boletinoficial.buenosaires.gob.ar/areas/leg_tecnica/boletinOficial/"
                  title="">Boletín Oficial</a></li>
              <li class=""><a href="/legalytecnica/normativa/formulario-de-busqueda" title="">Normativa</a></li>
              <li class=""><a href="http://www.buenosaires.gov.ar/organigrama/?menu_id=505" title="">Organigrama</a>
              </li>
              <li class=""><a href="http://www.buenosaires.gov.ar/organigrama/funcionarios/?menu_id=713" title="">Guía
                  de Funcionarios</a></li>

            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-sm-12  col-xs-12" style="margin-top: -55px;">
        <div class="container-telefonos">
          <nav id="telefonos" class="row shortcut-row">
            <a class="col-md-3 col-sm-6 shortcut" href="tel:103">
              <h3><span class="glyphicon glyphicon-earphone"></span>103</h3>
              <p>Emergencias</p>
            </a>
            <a class="col-md-3 col-sm-6 shortcut" href="tel:107">
              <h3><span class="glyphicon glyphicon-earphone"></span>107</h3>
              <p>SAME</p>
            </a>
            <a class="col-md-3 col-sm-6 shortcut" href="tel:108">
              <h3><span class="glyphicon glyphicon-earphone"></span>108</h3>
              <p>Línea social</p>
            </a>
            <a class="col-md-3 col-sm-6 shortcut" href="tel:147">
              <h3><span class="glyphicon glyphicon-earphone"></span>147</h3>
              <p>Atención Ciudadana</p>
            </a>
          </nav>
        </div>
      </div>


      <div class="col-md-12 col-sm-12" style="margin-top: -55px;">
        <div class="container-ciudad">
          <a href="http://www.buenosaires.gob.ar/"><img src="../static/BAstrap7/logos_buenosaires_ciudad.png"
              class="img-responsive logo_footer_ciudad"></a>
        </div>
      </div>

    </div>
  </footer>

  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <!-- JAVASCRIPT EXTRA -->
</body>

</html>