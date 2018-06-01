<template id="header">
        <header>
          <b-navbar toggleable="lg" type="light" fixed="top">
            <div class="container top-nav">
              <b-navbar-brand v-bind:to="{path:'/'}"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" :alt="this.$root.bloginfo.name" width="131" height="40" /> </b-navbar-brand>
              <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

              <b-collapse is-nav id="nav_collapse">
                <b-nav-text class="mr-3">
                  <em>{{this.$root.bloginfo.description}}</em>
                </b-nav-text>

                <b-navbar-nav class="mr-auto">
                  <!-- <b-nav-item v-bind:to="{path:'/page/about',name:'page'}">About</b-nav-item>
                  <b-nav-item v-bind:to="{path:'/blog/',name:'blog'}">Blog</b-nav-item> -->
                  <b-nav-item
                        v-for="(page, key, index) in pages"
                        v-bind:to="{ name: 'page', params: { slug: page.object_slug }}"
                        v-bind:key="key">
                            {{page.title}}
                    </b-nav-item>
                </b-navbar-nav>

                <div class="form-inline my-2 my-lg-0">
                  <search-form  v-bind:searchTerm="searchTerm" ></search-form>
                </div>

              </b-collapse>
            </div>
          </b-navbar>
        </header>
</template>
