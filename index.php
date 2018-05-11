<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#52b100">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <link rel="stylesheet" href="https://use.typekit.net/wgs1hhe.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dist/main.css" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class($class); ?>>
      <div id="app">
        <header-component></header-component>
        <transition name="fade-in">
            <router-view
              v-bind:posts="posts"
              v-bind:post="post"
              v-bind:comments="comments"
              v-bind:pagers="pagers"
              v-bind:loading="loading"
              v-bind:searchTerm="searchTerm">
            </router-view>
        </transition>
        <footer-component></footer-component>
      </div><!--app-->
      <?php get_template_part('/templates/_header'); ?>
      <?php get_template_part('/templates/_footer'); ?>
      <?php get_template_part('/templates/home'); ?>
      <?php get_template_part('/templates/archive'); ?>
      <?php get_template_part('/templates/search'); ?>
      <?php get_template_part('/templates/single'); ?>
      <?php get_template_part('/templates/page'); ?>
      <?php get_template_part('/templates/404'); ?>
      <?php get_template_part('/templates/_theloop'); ?>
      <?php get_template_part('/templates/_sidebar'); ?>
      <?php get_template_part('/templates/_search-form'); ?>
      <?php get_template_part('/templates/_comments'); ?>
      <?php get_template_part('/templates/_comment-form'); ?>
      <?php get_template_part('/templates/_nopost'); ?>
      <?php get_template_part('/templates/_loading'); ?>

      <!-- Development scripts with npm

      <script src="<?php echo get_template_directory_uri(); ?>/node_modules/axios/dist/axios.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/node_modules/vue/dist/vue.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/node_modules/vue-router/dist/vue-router.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/node_modules/babel-polyfill/dist/polyfill.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap-vue/dist/bootstrap-vue.js"></script>

      -->

      <script src="<?php echo get_template_directory_uri(); ?>/js/dist/axios.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/dist/vue.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/dist/vue-router.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/dist/polyfill.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/dist/bootstrap-vue.min.js"></script>

      <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
      <?php wp_footer(); ?>
    </body>
</html>
