<template id="single">
  <div class="single inner">
      <div class="loading" v-if="loading">
        <div class="container-fluid">
          <div class="justify-content-center text-center">
            <loading></loading>
          </div>
        </div>
      </div>
      <div class="loaded" v-else>
        <div class="justify-content-center text-center" v-if="post[0] && post[0].better_featured_image">
          <img class="img-fluid col-md-9 col-lg-8 mb-5" :src="post[0].better_featured_image.source_url" :alt="post[0].title.rendered" />
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8 content-area">
                    <div v-if="post[0]">
                        <h1 class="post-title">{{post[0].title.rendered}}</h1>
                        <div class="meta clearfix">
                          <router-link
                            class="float-left"
                            v-for="(cat, index) in post[0].cats"
                            v-bind:to="{name:'category', params: { category: cat.slug }}">
                              {{cat.name}}<span v-if="index < post[0].cats.length - 1">,&nbsp;</span>
                          </router-link>
                           <span class="float-right" v-if="post[0].acf.start_time">{{post[0].acf.start_time}}</span>
                        </div>
                        <div class="content" v-html="post[0].content.rendered"></div>
                        <comments v-if="post[0].comment_status != 'closed'" v-bind:comments="comments"></comments>
                        <comment-form v-if="post[0].comment_status != 'closed'"></comment-form>
                    </div><!--end v-if-->
                    <div v-else>
                        <nopost></nopost>
                    </div>
                </div><!--end content-area-->
            </div><!--end single-->

        </div><!--end container-->
      </div>
  </div>
</template>
