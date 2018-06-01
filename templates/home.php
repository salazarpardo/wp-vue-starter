<template id="home">

    <div class="home">
      <div class="jumbotron jumbotron-fluid">
        <div class="jumbotron-bg"></div>
        <div class="row justify-content-center">
           <div class="col-lg-8">
             <h1>Acelerando Negocios Verdes en la Alianza del Pacífico</h1>
             <p class="lead d-none d-md-block">Bienvenido a la Banca de Inversión Sostenible.</p>
             <hr class="my-4  d-none d-md-block">
             <p class="lead">
               <router-link class="btn btn-primary" v-bind:to="{name:'page', params: { slug: 'nosotros' }}">Conoce más</router-link>
               <!-- <a class="btn btn-primary btn-lg" v-bind:to="{path:'/page/about/',name:'about'}" role="button">Learn more</a> -->
             </p>
           </div>
        </div>
      </div>
      <section class="landing-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
              <header class="landing-section-header text-center">
                <h4 class="text-dark">Apoyamos emprendimientos con triple cuenta de resultados</h4>
                <p class="text-secondary">
                  Estudiamos no solo el comportamiento ecónomico del emprendimiento, sino tambien su impacto social y ambiental en la comunidad.
                </p>
              </header>
              <div class="row icons-row justify-content-center pl-4 pr-4">
                <div class="col-4 col-lg-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/money.svg" alt="Económica" />
                  <h6 class="text-dark mb-0">
                    Económica
                  </h6>
                </div>
                <div class="col-4 col-lg-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/people.svg" alt="Social" />
                  <h6 class="text-dark mb-0">
                    Social
                  </h6>
                </div>
                <div class="col-4 col-lg-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/leaf.svg" alt="Ambiental" />
                  <h6 class="text-dark mb-0">
                    Ambiental
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="landing-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
              <header class="landing-section-header text-center">
                <h4 class="text-dark">Lideramos el camino hacia una América Látina sostenible</h4>
                <p class="text-secondary">
                  La Banca de Inversión Sostenible se proyecta desde la Alianza del Pacífico como catalizador de bienes y servicios que generan impactos ambientales y sociales positivos para el planeta.
                </p>
              </header>
              <div class="row icons-row justify-content-center mt-3">
                <div class="col-9">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/pacific.svg" alt="Alianza del Pácifico" width="320" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="landing-section">
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-9 col-md-11">
                <header class="landing-section-header text-center">
                  <h4 class="text-dark">Nuestras líneas de negocio</h4>
                </header>
                <div class="row">
                  <div class="col-md-4">
                    <div class="row icons-row justify-content-center">
                      <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/academy.svg" alt="Formación" />
                      </div>
                      <div class="col-11">
                        <h6 class="text-dark">
                          1. Formación
                        </h6>
                        <p>
                          Programa de fortalecimiento a negocios, consultores y fondos de capital, implementado de la mano de universidades, centros de innovación y Gobiernos locales.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row icons-row justify-content-center">
                      <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/consultancy.svg" alt="Formación" />
                      </div>
                      <div class="col-11">
                        <h6 class="text-dark">
                          2. Consultoría
                        </h6>
                        <p>
                          Acompañamiento especializado para la estructuración de planes estratégicos de crecimiento. Alistamiento para recibir inversión de impacto.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row icons-row justify-content-center">
                      <div class="col-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/agency.svg" alt="Formación" />
                      </div>
                      <div class="col-11">
                        <h6 class="text-dark">
                          3. Agencia
                        </h6>
                        <p>
                          Organización y promoción de encuentros de alto nivel. Formulación de política pública
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>
      <section class="landing-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <header class="landing-section-header text-center">
                <h4 class="text-dark mb-4">Nuestros aliados</h4>
              </header>
              <div class="row icons-row justify-content-center">
                <div class="col-5 col-md-3">
                    <img class="img-fluid" width="120" src="<?php echo get_template_directory_uri(); ?>/img/allies/andes.svg" alt="Universidad de Los Andes" />
                </div>
                <div class="col-5 col-md-3">
                    <img class="img-fluid" width="120" src="<?php echo get_template_directory_uri(); ?>/img/allies/tec.svg" alt="Tecnológico de Monterrey" />
                </div>
                <div class="col-5 col-md-3">
                    <img class="img-fluid" width="120" src="<?php echo get_template_directory_uri(); ?>/img/allies/catolica.svg" alt="Universidad Católica de Chile" />
                </div>
                <div class="col-5 col-md-3">
                    <img class="img-fluid" width="120" src="<?php echo get_template_directory_uri(); ?>/img/allies/pacifico.svg" alt="Universidad del Pacífico" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="landing-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-11 col-md-10 col-lg-7">
              <header class="landing-section-header">
                <h5 class="mb-3"><router-link class="text-dark" v-bind:to="{path:'/blog/',name:'blog'}" >Noticias recientes</router-link></h5>
              </header>
              <the-loop v-bind:posts="posts" v-bind:pagers="pagers" v-bind:loading="loading"></the-loop>
            </div>
          </div>
        </div>
      </section>
      <section class="landing-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-11 col-lg-6 col-md-8">
              <header class="landing-section-header text-center">
                <h5 class="text-dark">¿Que estan dicendo de nosotros?</h5>
              </header>
              <blockquote class="testimonial">
                <p class="text-secondary"><em>“Las naciones avanzan a la velocidad de sus empresas, e iniciativas como esta nos llevan por la senda  de crecimiento sostenible y rentable que necesita LATAM.”</em> </p>
                — <cite class="testimonial-author"><a href="http://www.somosasec.com/" target="_blank">Sergio Zuluaga</a></cite><br>
                <small>Director de la Asociación de Emprendedores de Colombia</small>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
    <div>

</template>
