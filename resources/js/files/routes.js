
import Vue       from 'vue';
import Router    from 'vue-router';
Vue.use(Router);
Vue.config.devtools = true;


export default new Router({
   routes : [
        { component : require('../app/DashBoard').default,       name      : 'DashBoard',       path      : '/DashBoard'     },
        { component : require('../app/Listar').default,       name      : 'Listar',       path      : '/Listar'     },
       ],
  linkExactActiveClass: 'link-active',
  //linkActiveClass:      'link-exact-active',
   mode:              'history',
   scrollBehavior(){
      return { x:0, y:0 };
   }
});
