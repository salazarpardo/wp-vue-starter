<template id="footer">
  <footer class="container-fluid footer">
    <div class="row justify-content-center pl-3 pr-3">
      <div class="col-7 col-md-6 col-lg-5">
        <router-link v-bind:to="{path:'/'}">
          <img class="float-left img-fluid mr-3 mb-5" src="<?php echo get_template_directory_uri(); ?>/img/logo-w.svg" alt="this.$root.bloginfo.name" width="24" />
        </router-link>
        <h6 class="menu-title text-dark">Menú</h6>
        <b-nav class="footer-menu">
          <b-nav-item v-bind:to="{path:'/'}">
                Inicio
          </b-nav-item>
          <b-nav-item
              v-for="(page, key, index) in pages"
              v-bind:to="{ name: 'page', params: { slug: page.object_slug }}"
              v-bind:key="key">
                {{page.title}}
          </b-nav-item>
        </b-nav>
      </div>
      <div class="col-5 col-md-4 col-lg-2">
        <b-nav class="social float-right">
          <b-nav-item href="https://www.facebook.com/bancasostenible/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook.svg" alt="Página en Facebook" width="16" height="16" />
          </b-nav-item>
          <b-nav-item href="https://twitter.com/BancaSostenible">
              <img src="<?php echo get_template_directory_uri(); ?>/img/social/twitter.svg" alt="Perfil en Twitter" width="16" height="16" />
          </b-nav-item>
          <b-nav-item href="https://co.linkedin.com/company/bancasostenible">
              <img src="<?php echo get_template_directory_uri(); ?>/img/social/linkedin.svg" alt="Página en LinkedIn" width="16" height="16" />
          </b-nav-item>
        </b-nav>

      </div>
    </div>
     <p class="copyright text-center mb-0">© <?php echo date("Y"); ?> Banca de Inversión Sostenible</p>
  </footer>
</template>
