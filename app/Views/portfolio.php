<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max Jeldres</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ece67ff936.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include("header.php"); ?>
  <section class="section">
    <div class="container">
    <div class="card card_mi">
      <div class="card-content">
        <p class="title" style="color: #468189">
          Sobre mi,
        </p>
        <p class="subtitle" style="color: #468189">
         Analista programador titulado de Duoc UC, llevo un poco más de dos años ejerciendo como programador. Me considero un full stack, ya que me he desempeñado en ese rol. Soy fan de las películas del estudio Ghibli. Mi meta actual es convertirme en un programador integral con una visión destacada en el desarrollo móvil.
        </p>
        <p style="font-size: large;">"La mente es como un paracaídas. Solo funciona si la tenemos abierta" por Albert Einstein.</p>
      </div>
      <footer class="card-footer">
      <p class="card-footer-item">
          <span >
            Tecnologias <a href="#cont_tech"><i class="fa-solid fa-angle-down c_primary"></i></a>
          </span>
        </p>
        <p class="card-footer-item">
          <span>
            Experiencias <a href="#cont_exp"><i class="fa-solid fa-angle-down c_primary"></i></a>
          </span>
        </p>
        <p class="card-footer-item">
          <span>
            Proyectos <a href="#"><i class="fa-solid fa-angle-down c_primary"></i></a>
          </span>
        </p>
      </footer>
    </div>
    </div>

    <div class="container" id="cont_tech">
      <div class="card card_mi">
        <header class="card-header" style="justify-content: center">
          <p class="title" style="color: #468189; padding: 5px 5px;">
            Tecnologias
          </p>
        </header>
        <div class="card-content">
          <div class="content tecnology">
            <p class="icon_tech">
            <i class="fa-brands fa-php c_primary tec"></i>
            <i class="fa-brands fa-js c_primary tec"></i>
            <i class="fa-brands fa-node c_primary"></i>
            <i class="fa-brands fa-html5 c_primary"></i>
            <i class="fa-brands fa-git-alt c_primary"></i>
            </p>
            <p class="icon_tech">
            <i class="fa-brands fa-css3 c_primary"></i>
            <i class="fa-brands fa-angular c_primary"></i>
            <i class="fa-brands fa-python c_primary"></i>
            <i class="fa-brands fa-java c_primary"></i>
            <i class="fa-brands fa-bootstrap c_primary"></i>
            </p>            
            <hr style="background-color:#468189;">
            <div class="lbl_tech">Bases de datos:  
              <p>Postgresql</p>
              <p>Mysql</p>
              <p>Oracle</p>
              <p>Sqlserver</p>
            </div>
            <hr style="background-color:#468189;">
            <div class="lbl_tech">Otros:
              <p>Flutter</p>
              <p>Imsomnia</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" id="cont_exp">
      <div class="card card_mi">
      <header class="card-header" style="justify-content: center">
          <p class="title" style="color: #468189; padding: 5px 5px;">
            Experiencias
          </p>
      </header>
      <div class="card-content" >
          <div class="tabs is-boxed is-fullwidth tab_personalizada">
            <ul>
              <li id="t1"><a>Cronos</a></li>
              <li id="t2"><a>AsisteActivos</a></li>
            </ul>
          </div>
          <input type="hidden" id="contenido_exp" value="">
          <div class="media-center">
            <figure class="image is-3by2">
              <img src="" id="img">
            </figure>
          </div>
          <div class="media-content is-medium" style="text-align:center;">
             <div  class="flechas mgTop2"><i class="fa-solid fa-xl fa-caret-left c_primary" style="cursor: pointer;" id="prev"></i><i class="fa-solid fa-xl fa-caret-right c_primary" style="cursor: pointer;" id="next"></i></div>
            <p class="title is-3" id="cont_exp_tittle"></p>
            <p class="subtitle is-4" id="cont_exp_sub" style="color: #468189;"></p>
            <p class="is-5" id="cont_exp_text" style="color: #031926;"></p>
          </div>

        </div>
      </div>
    </div>
    <!-- <div class="container">
    <div class="card card_mi">
    <header class="card-header" style="justify-content: center">
          <p class="title" style="color: #468189; padding: 5px 5px;">
            Proyectos
          </p>
        </header>
      <div class="card-image">
        <figure class="image is-2by1">
          <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
        </figure>
      </div>
      <div class="card-content">
        <div class="media">
          <div class="media-left">
            <figure class="image is-18x18">
              <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="media-content">
            <p class="title is-4">John Smith</p>
            <p class="subtitle is-6">@johnsmith</p>
          </div>
        </div>

        <div class="content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Phasellus nec iaculis mauris. <a>@bulmaio</a>.
          <a href="#">#css</a> <a href="#">#responsive</a>
          <br>
          <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
        </div>
      </div>
    </div>
    </div> -->
    <div class="button_float">
      <button class="button btn_float">
        <span class="icon is-small">
        <i class="fa-solid fa-xl fa-angles-up"></i>
        </span>
      </button>
    </div>
    
  </section>
  <script src="<?= base_url('js/general.js');?>"></script>
  </body>
</html>