<template id="comment-form">
    <div class="comment-form-wrap" v-cloak>
        <h3>Escribe tu solución</h3>


        <div v-if="submitted" class="alert alert-success" role="alert">
            Gracias, tu solución se ha enviado correctamente.
        </div>

        <div v-if="!submitted">
            <div class="form-group">
                <label for="commenter">Nombre</label>
                <input v-model="commenter"
                    v-bind:class="{'form-control':true, 'is-invalid' : commenter == '' && commenterBlured}"
                    v-on:blur="commenterBlured = true">
                <div class="invalid-feedback">Requerido</div>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input
                    v-model="email"
                    v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}"
                    v-on:blur="emailBlured = true">
                <div class="invalid-feedback">Se requiere un correo valido</div>
            </div>
            <div class="form-group">
                <label for="website">Empresa <i>(opcional)</i></label>
                <input v-model="website" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Solución al reto</label>
                <textarea
                    v-model="content"
                    v-bind:class="{'form-control':true, 'is-invalid' : content == '' && contentBlured}"
                    v-on:blur="contentBlured = true"
                    ></textarea>
                <div class="invalid-feedback">Requerido</div>
            </div>
            <div class="form-group">
                <button type="submit" v-on:click.stop.prevent="submit" class="btn btn-lg btn-success">Enviar</button>
            </div>
        </div>
    </div>
</template>
