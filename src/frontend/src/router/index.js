import Vue from 'vue';
import Router from 'vue-router';
import sjWelcome from '@/pages/Welcome/Welcome';
import sjError from '@/pages/404/404';
import sjAbout from '@/pages/About/About';

Vue.use( Router );

export default new Router( {
  routes: [
    {
      path: '/',
      name: 'Welcome',
      component: sjWelcome,
    }, {
      path: '/about',
      name: 'about',
      component: sjAbout,
    }, {
      path: '/skills',
      name: 'skills',
      component: sjError,
    }, {
      path: '/projects',
      name: 'projects',
      component: sjError,
    }, {
      path: '/blog',
      name: 'blog',
      component: sjError,
      children: [
        {
          path: ':id',
          name: 'blog.post',
          component: sjError,
        },
      ],
    },
  ],
} );
