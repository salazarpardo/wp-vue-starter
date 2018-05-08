<template id="page">
<div class="page inner">
  <div class="loading" v-if="loading">
    <div class="container-fluid">
      <div class="justify-content-center text-center">
        <loading></loading>
      </div>
    </div>
  </div>
  <div v-else>
    <div class="container-fluid" v-if="post[0] && post[0].better_featured_image">
      <div class="justify-content-center text-center">
        <img class="img-fluid mb-3" :src="post[0].better_featured_image.source_url" :alt="post[0].title.rendered" />
      </div>
    </div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div v-if="post[0]">
                    <h1>{{post[0].title.rendered}}</h1>
                    <div class="content" v-html="post[0].content.rendered"></div>
                </div>
                <div v-else>
                    <nopost></nopost>
                </div>
            </div><!--end col-lg-12-->
        </div><!--end row-->

    </div><!--end container-->

  </div>
</div>

</template>
