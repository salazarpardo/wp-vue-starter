Vue.config.devtools = false;

Vue.prototype.$http = axios;
//partial components

Vue.component('the-loop',{
    template : "#the-loop",
    props: ['posts', 'pagers','loading']
})

Vue.component('sidebar',{
    template : "#sidebar"
})

Vue.component('footer-component',{
    template : "#footer",
    data : function(){
        return {
            pages : [],
        }
    },
    mounted : function(){
        var _this = this;
        axios.get('/wp-json/wp-api-menus/v2/menus/9')
            .then(function (response) {
                _this.pages = response.data.items;
            })
            .catch(function (error) {
                console.log(error);
            });
    }
})

Vue.component('nopost',{
    template : "#nopost"
})

Vue.component('loading',{
    template : "#loading"
})

Vue.component('header-component',{
    template : "#header",
    props : ['searchTerm'],
    data : function(){
        return {
            pages : [],
        }
    },
    mounted : function(){
        var _this = this;
        axios.get('/wp-json/wp-api-menus/v2/menus/9')
            .then(function (response) {
                _this.pages = response.data.items;
            })
            .catch(function (error) {
                console.log(error);
            });
    }
})

Vue.component('search-form',{
    template : "#search-form",
    methods : {
        doSearch : function(){
            this.$router.push(
                {   name: 'search',
                    query: {
                        term: this.searchTerm
                    }});
        }
    },
    data: function () {
        searchTerm = this.$route.query.term
                ? this.$route.query.term : "";
        return {
            searchTerm : searchTerm
        }
    },
    watch : {
        '$route' : function (to, from) {
            searchTerm = to.query.term
                ? to.query.term : "";
            this.searchTerm = searchTerm;
        }
    }
})

Vue.component('comment-form',{
    template : "#comment-form",
    methods : {
        validEmail : function(email) {
            var re = /\S+@\S+/;
            return re.test(email.toLowerCase());
        },
        validate : function(){

            this.commenterBlured = true;
            this.emailBlured = true;
            this.contentBlured = true;

            if( this.commenter !== ''
                && this.validEmail(this.email)
                && this.content !== ''){
                this.valid = true;
            }
        },
        submit : function(){
            var _this = this;
            var action
            _this.validate();
            if(_this.valid){
              const params = new URLSearchParams();
              params.append('author_name', _this.commenter);
              params.append('author_email', _this.email);
              params.append('content', _this.content);
              // params.append('author_url', _this.website);
              params.append('post',_this.$parent.post[0].id);
              axios.post('/wp-json/wp/v2/comments', params
             ).then(function (response) {
               console.log(response);
                _this.submitted = true;
              })
              .catch(function (error) {
                  console.log(error);
              });
            }
        } //end submit
    },
    data: function () {
        return {
            commenter : "",
            commenterBlured : false,
            email : "",
            emailBlured : false,
            website : "",
            content : "",
            contentBlured : false,
            valid : false,
            submitted : false
        }
    }
})

Vue.component('comments',{
    template : "#comments",
    props : ['comments']
})

//components with routes

const PageNotFound = Vue.component('pagenotfound',{
    template : "#pagenotfound"
})

const Home = Vue.component('home', {
    template: '#home',
    props: ['posts', 'pagers']
})

const Single = Vue.component('single', {
    template: '#single',
    props: ['post','comments','loading'],
})

const Page = Vue.component('page', {
    template: '#page',
    props: ['post','loading']
})

const Archive = Vue.component('archive', {
    template: '#archive',
    props: ['posts', 'pagers']
})

const Search = Vue.component('search', {
    template: '#search',
    props: ['posts', 'pagers' ],
})

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// Vue.extend(), or just a component options object.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: Home, meta: {title: 'Banca de Inversión Sostenible'} },
  { path: '/post/:slug', component: Single, name : 'post' },
  { path: '/preview/:id', component: Single, name : 'preview' },
  { path: '/page/:slug', component: Page, name : 'page' },
  { path: '/category/:category', name : 'category', component: Archive },
  { path: '/tag/:tag', name : 'tag', component: Archive },
  { path: '/blog/', name : 'blog', component: Archive, meta: {title: 'Banca de Inversión Sostenible'} },
  { path: '/search/', name : 'search', component: Search, meta: {title: 'Banca de Inversión Sostenible'} },
  { path: "*", component: PageNotFound }
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
  routes : routes,
  mode: 'history',
  scrollBehavior (to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  }
})


// This callback runs before every route change, including on page load.
router.beforeEach((to, from, next) => {
  // This goes through the matched routes from last to first, finding the closest route with a title.
  // eg. if we have /some/deep/nested/route and /some, /deep, and /nested have titles, nested's will be chosen.
  const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);

  // Find the nearest route element with meta tags.
  const nearestWithMeta = to.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);
  const previousNearestWithMeta = from.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);

  // If a route with a title was found, set the document (page) title to that value.
  if(nearestWithTitle) document.title = nearestWithTitle.meta.title;

  // Remove any stale meta tags from the document using the key attribute we set below.
  Array.from(document.querySelectorAll('[data-vue-router-controlled]')).map(el => el.parentNode.removeChild(el));

  // Skip rendering meta tags if there are none.
  if(!nearestWithMeta) return next();

  // Turn the meta tag definitions into actual elements in the head.
  nearestWithMeta.meta.metaTags.map(tagDef => {
    const tag = document.createElement('meta');

    Object.keys(tagDef).forEach(key => {
      tag.setAttribute(key, tagDef[key]);
    });

    // We use this to track which meta tags we create, so we don't interfere with other ones.
    tag.setAttribute('data-vue-router-controlled', '');

    return tag;
  })
  // Add the meta tags to the document head.
  .forEach(tag => document.head.appendChild(tag));
  next();
});

// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
const app = new Vue({
    el : '#app',
    router : router,
    data : {
      "message" : "algo",
      "bloginfo" : {
          "name" : "",
          "url" : "",
          "description" : ""
      },
      "posts" : [],
      "comments" : [],
      "post" : {},
      "pagers" : [],
      "loading" : false,
      "searchTerm" : ""
    },
    created : function(){
        this.getBloginfo();
        this.updateData();
    },
    watch : {
        '$route' : function (to, from) {
            this.updateData();
        }
    },
    methods : {
        getBloginfo : function(){
            var _this = this;
            var urlStr = "/wp-json/"
            axios.get(urlStr)
                .then(function (response) {
                    _this.bloginfo.name = response.data.name;
                    _this.bloginfo.description = response.data.description;
                    _this.bloginfo.url = response.data.url;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        buildPager : function(headers){
            var items = headers['x-wp-total'];
            var pages = headers['x-wp-totalpages'];
            var pagers = [];
            for(var i=0;i<pages;i++){
                pagers.push((i+1));
            }
            return pagers;
        },

        updateData : function(){
            if(this.$route.name == "post"
                || this.$route.name == "page"
                || this.$route.name == "preview"){
                this.posts = [];
                this.pagers = [];
                this.fetchSinglePost();
            }else{
                this.fetchPosts();
            }
        },
        fetchComments : function(){
            var _this = this;
            axios.get('/wp-json/wp/v2/comments?post='+this.post[0].id)
                .then(function (response) {
                    _this.comments = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        fetchSinglePost : function(){
            const _this = this;
            _this.loading = true;
            var ajax = {};
            var type = _this.$route.name;
            switch(type){
                case "post":
                    ajax = _this.$http.get('/wp-json/wp/v2/posts?slug='+_this.$route.params.slug);
                break;
                case "page":
                    ajax = _this.$http.get('/wp-json/wp/v2/pages?slug='+_this.$route.params.slug);
                break;
                case "preview":
                    ajax = _this.$http.get('/wp-json/wpvue/preview?id='+_this.$route.params.id);
                break;
            }

            ajax.then((response) => {
                document.title = response.data[0].title.rendered;
                this.post = response.data;
                if(type != 'page' && this.post.length > 0){
                    this.fetchComments();
                }
                this.loading = false;
            })
            .catch((error) => {
                console.log(error);
                this.loading = false
            });

        },
        fetchPosts : function(){
            var _this = this;
            _this.loading = true;
            var urlStr = '/wp-json/wp/v2/posts?';
            //CATEGORY FILTER
            if(!_this.isEmpty(_this.$route.params)){
                if(_this.$route.name == 'category'){
                    urlStr += '&filter[category_name]='+_this.$route.params.category;
                }else if(_this.$route.name == 'tag'){
                    urlStr += '&filter[tag]='+_this.$route.params.tag;
                }
            }
            if(!_this.isEmpty(_this.$route.query)){
                if(_this.$route.query.term){ //SEARCH
                    urlStr += '&search=' + _this.$route.query.term;
                }
                if(!isNaN(_this.$route.query.page)){  //PAGING
                    urlStr += '&page=' + _this.$route.query.page;
                }
            }

            //LIMIT TO 3 IN HOME - TEMP ONLY!! Find a better way to do this:
            if(_this.$route.path == '/'){
                urlStr += '&per_page=3';
            }

            axios.get(urlStr)
                .then(function (response) {
                    _this.posts = response.data;
                    _this.pagers = _this.buildPager(response.headers);
                    _this.post = {};
                    _this.comments = [];
                    this.loading = false;
                })
                .catch(function (error) {
                    console.log(error);
                    this.loading = false;
            });
        },
        isEmpty : function (obj) {
            for(var key in obj) {
                if(obj.hasOwnProperty(key))
                    return false;
            }
            return true;
        }
    }
}).$mount('#app')

// Now the app has started!
