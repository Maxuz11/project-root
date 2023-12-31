<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portafolio Max Jeldres</title>
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
        <p class="subtitle is-4" style="color: #468189">
         Analista programador titulado de Duoc UC, llevo un poco más de dos años ejerciendo como programador. Me considero un full stack, ya que me he desempeñado en ese rol. Soy fan de las películas del estudio Ghibli. Mi meta actual es convertirme en un programador integral con una visión destacada en el desarrollo móvil.
        </p>
        <p class="subtitle is-3">"La mente es como un paracaídas. Solo funciona si la tenemos abierta" por Albert Einstein.</p>
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
            Proyectos <a href="#cont_pro"><i class="fa-solid fa-angle-down c_primary"></i></a>
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
          <div class="media-center" id="imagen_">
            <input type="hidden" id="n_img" value="1">
            <figure class="image is-3by2">
              <!-- <img src="" id="img" alt="img_experience" > -->
              <div class="image-wrapper">
                <img class="image-1" src="" />
                <img class="image-2" src="" />
                <img class="image-3" src="" />
                <img class="image-4" src="" />
              </div>
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

    <div class="container" id="cont_pro">
      <div class="card card_mi">
        <header class="card-header" style="justify-content: center">
            <p class="title" style="color: #468189; padding: 5px 5px;">
              Proyectos
            </p>
        </header>
        
        <div class="card-content">
          <div class="content">
            <div class="container_proyect">
              <div class="thumbex">
                <div class="thumbnail" id="ir_jc">
                  <a>
                    <img src="img/JuntaClick.png" alt="JuntaClick">
                    <span>JuntaClick</span>
                  </a>
                </div>
              </div>
              <div class="thumbex">
                <div class="thumbnail" id="ir_porta">
                  <a>
                    <img src="img/portafolio.png" alt="Portafolio">
                    <span>Portafolio</span>
                  </a>
                </div>
              </div>
              <div class="thumbex">
                <div class="thumbnail" id="ir_mobile">
                  <a >
                    <img src="img/flutter_app.jpeg" alt="AppMobile">
                    <span>AppMobile</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal en bulma -->
    <!--Modales -->
    <div id="modal-juntaClick" class="modal">
      <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head" >
            <p class="modal-card-title">Portafolio DuocUC: JuntaClick</p>
            <button class="delete" aria-label="close" onclick="cerrarModJunta()" ></button>
          </header>
          <section class="modal-card-body">
            <div class="img_modal2">
              <figure class="snip1190">
                <img src="img/JuntaClick.png" alt="login"/>
                <figcaption>
                  <div class="square">
                    <div></div>
                  </div>
                  <h2><span>Login</span></h2>
                </figcaption>
              </figure>
              <figure class="snip1190">
                  <img src="img/jc_2.png" alt="acción"/>
                  <figcaption>
                    <div class="square">
                      <div></div>
                    </div>
                    <h2><span>vista Sitio</span></h2>
                  </figcaption>
                </figure>
              
            </div>
            <div class="img_modal2">
              <figure class="snip1190">
                <img src="img/correo_jc.jpeg" alt="correo"/>
                <figcaption>
                  <div class="square">
                    <div></div>
                  </div>
                  <h2><span>Notificación Correo</span></h2>
                </figcaption>
              </figure>
            </div>
          
            <p style="color: #468189;">
            <li class="subtitle is-5">Front: Angular,Boostrap.</li> 
            <li class="subtitle is-5">Backed: sequelize[typescript],nodemon.</li><li class="subtitle is-5">BDA: Oracle</li></p>
            <br>
            <p class="is-4" style="color: #031926; text-align:center;">Este fue el software web que presentamos como portafolio de titulo, el cual se basaba en algunas de las funciones de una junta vecinal. Decidimos hacer esto debido a que es una plataforma que debiese ser actualizada para poder entregar mayor información a los vecinos de comunas. Este software en sus funciones contemplaba el envio de notificacíon via correo, generacion de excel y pdf, sumado a un grafico de valoracion. Tambien poseaia la obligacion de tramitacion de proyectos, adhesion o rechazo de los vecinos, etc. Desarrollado en Angular 13 con Boostrap como estilizador.
            </p>
            <hr style="background-color:#468189;">
            <p>https://github.com/Maxuz11/portafolio.git</p>
          </section>
          <footer class="modal-card-foot" style="justify-content: end; background-color: #F4E9CD">
            <button class="button" onclick="cerrarModJunta()" style="background-color: #031926; color: #fff">Cerrar</button>
          </footer>
        </div>
      </div>

    <div id="modal-porta" class="modal">
      <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head" >
            <p class="modal-card-title">Portafolio Web</p>
            <button class="delete" aria-label="close" onclick="cerrarModPort()" ></button>
          </header>
          <section class="modal-card-body">
            <div class="img_modal2">
              <figure class="snip1190">
                <img src="img/portafolio.png" alt="login"/>
                <figcaption>
                  <div class="square">
                    <div></div>
                  </div>
                  <h2><span>Vista 1</span></h2>
                </figcaption>
              </figure>
              <figure class="snip1190">
                  <img src="img/porta2.png" alt="acción"/>
                  <figcaption>
                    <div class="square">
                      <div></div>
                    </div>
                    <h2><span>Vista 2</span></h2>
                  </figcaption>
                </figure>              
            </div>
          
            <p style="color: #468189;">
            <li class="subtitle is-5">Front: CodeIgniter4,Bulma.</li> <li class="subtitle is-5">Control version: GIT</li></p>
            <br>
            <p class="is-4" style="color: #031926; text-align:center;">Este proyecto nace como un desafio propio de utilizar un framework como Codeigniter para programar y mostrar algunas de mis habilidades como desarrollador web. Desarrollado en CodeIgniter4 con Bulma como estilizador.
            </p>
            <hr style="background-color:#468189;">
            <p>https://github.com/Maxuz11/project-root.git</p>
          </section>
          <footer class="modal-card-foot" style="justify-content: end; background-color: #F4E9CD">
            <button class="button" onclick="cerrarModPort()" style="background-color: #031926; color: #fff">Cerrar</button>
          </footer>
        </div>
      </div>
    
      <div id="modal-mobile" class="modal">
      <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head" >
            <p class="modal-card-title">Proyecto Mobile</p>
            <button class="delete" aria-label="close" onclick="cerrarModMobile()" ></button>
          </header>
          <section class="modal-card-body">
            <div class="img_modal2">
              <figure class="snip1190">
                <img src="img/flutter_app.jpeg" alt="app_mob"/>
                <figcaption>
                  <div class="square">
                    <div></div>
                  </div>
                  <h2><span>Vista</span></h2>
                </figcaption>
              </figure>             
            </div>
          
            <p style="color: #468189;">
            <li class="subtitle is-5">Front: Flutter,Material.</li>
            <li class="subtitle is-5">Back: Javascript(Nodejs).</li>
            <li class="subtitle is-5">BDA: Postgresql.</li>
            <li class="subtitle is-5">Control version: GIT</li></p>
            <br>
            <p class="is-4" style="color: #031926; text-align:center;">Proyecto personal de una app mobile, en la actualidad esta en desarrollo... Se ha utilizado flutter con amaterial para la interface grafica.
            </p>
          </section>
          <footer class="modal-card-foot" style="justify-content: end; background-color: #F4E9CD">
            <button class="button" onclick="cerrarModMobile()" style="background-color: #031926; color: #fff">Cerrar</button>
          </footer>
        </div>
      </div>  

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