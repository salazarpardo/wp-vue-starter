<template id="search">
<div class="search inner">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="main-title">Resultados de búsqueda para <strong>{{searchTerm}}</strong></h1>
                <the-loop
                    v-bind:posts="posts"
                    v-bind:pagers="pagers"
                    v-bind:loading="loading">
                </the-loop>
            </div><!--end col-lg-12-->
        </div><!--end row-->

    </div><!--end container-->
<div>

</template>
