<template id="home">

  <div class="home">
      <div class="jumbotron jumbotron-fluid bg-gradient">
        <div class="jumbotron-bg"></div>
        <div class="container-fluid">
          <div class="row justify-content-center">
             <div class="col-lg-8">
               <h1>Acelerando negocios verdes en la Alianza del Pacífico</h1>
               <p class="lead d-none d-md-block">Bienvenido a la Banca de Inversión Sostenible.</p>
               <hr class="my-4  d-none d-md-block">
               <p class="lead">
                 <router-link class="btn btn-primary btn-lg" v-bind:to="{name:'page', params: { slug: 'about' }}">Ver más</router-link>
                 <!-- <a class="btn btn-primary btn-lg" v-bind:to="{path:'/page/about/',name:'about'}" role="button">Learn more</a> -->
               </p>
             </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-9">
            <h4 class="text-center text-primary mb-5">La primera Banca de Inversión enfocada en apoyar emprendimientos con triple cuenta de resultados</h4>

            <div class="text-center">
              <figure class="figure text-center p-4">
                <img class="mb-5 img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/triple-cuenta.png" alt="Triple cuenta de resultados" />
                <figcaption class="figure-caption">Fig. 1 Triple cuenta de resultados.</figcaption>
              </figure>
            </div>
            <h5>¿Que hacemos en la Banca de Inversión Sostenible?</h5>
            <p>
              La Banca de Inversión Sostenible busca acelerar emprendimientos con triple cuenta de resultados en la Alianza del Pácifico.
            </p>
            <h5>¿De que se trata la triple cuenta de resultados?</h5>
            <p>
              Al analizar no solo el comportamiento ecónomico que ha tenido el emprendimiento, sino tambien su impactos social y ambiental en la comunidad…
            </p>
            <p class="mb-5">
              <em><router-link class="view-more" v-bind:to="{name:'page', params: { slug: 'about' }}">» Ver más</router-link></em>
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h5 class="latest-title"><router-link v-bind:to="{path:'/blog/',name:'blog'}" >Últimas noticias</router-link></h5>
            <the-loop v-bind:posts="posts" v-bind:pagers="pagers"></the-loop>
          </div>
        </div>
      </div>
  <div>


</template>
