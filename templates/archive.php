<template id="archive">
<div class="archive inner">
    <div class="container">
      <div class="row">
          <div class="col-lg-8">
              <h1 class="main-title">
                <span v-if="$route.params.category">{{$route.params.category}}</span>
                <span v-if="$route.params.tag">{{$route.params.tag}}</span>
              </h1>
              <the-loop
                  v-bind:posts="posts"
                  v-bind:pagers="pagers">
              </the-loop>
          </div>
          <sidebar></sidebar>
      </div>
    </div><!--end container-->
</div>


</template>
