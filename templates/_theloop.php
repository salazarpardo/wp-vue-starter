<template id="the-loop">
  <div class="posts-loop"><!--div wrapper-->
    <div class="loading" v-if="loading">
      <div class="container-fluid">
        <div class="justify-content-center text-center">
          <loading></loading>
        </div>
      </div>
    </div>
    <div class="loaded" v-else>
      <div v-if="posts.length > 0">
        <!--loop starts here-->
        <ul class="the-loop">
          <li v-for="post in posts">
              <router-link v-bind:to="{ name: 'post', params: { slug: post.slug }}" v-if="post.better_featured_image">
                <img class="img-fluid mb-3" :src="post.better_featured_image.source_url" :alt="post.title.rendered" />
              </router-link>
              <h3 class="title">
                  <router-link class="text-dark" v-bind:to="{ name: 'post', params: { slug: post.slug }}">
                      {{post.title.rendered}}
                  </router-link>
              </h3>
              <div class="meta clearfix">
                <router-link
                  class="float-left"
                  v-for="(cat, index) in post.cats"
                  v-bind:to="{name:'category', params: { category: cat.slug }}">
                    {{cat.name}}<span v-if="index < post.cats.length - 1">,&nbsp;</span>
                </router-link>
                 <span class="float-right" v-if="post.acf.start_time">{{post.acf.start_time}}</span>
              </div>
              <div class="excerpt" v-html="post.excerpt.rendered"></div>
              <p class="mb-2">
                <em>
                  <router-link v-bind:to="{ name: 'post', params: { slug: post.slug }}">
                    » Ver más
                  </router-link>
                </em>
              </p>
          </li>
        </ul>
        <!--the loop ends-->
        <!--paging starts here-->
        <ul v-if="pagers.length > 1" class="pagination">
          <li v-for="(pager,index) in pagers" class="page-item">
            <router-link class="page-link"
              v-bind:to="{path:$route.fullPath, query: {page : pager}}">
              {{pager}}
            </router-link>
          </li>
        </ul>
        <!--paging ends-->
      </div><!--end v-if-->
      <div v-else>
        <nopost></nopost>
      </div>
    </div>
  </div><!--end div wrapper-->
</template>
