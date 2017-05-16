import Vue from 'vue';
import Router from 'vue-router';
import sjWelcome from '@/pages/Welcome/Welcome';
import sjError from '@/pages/404/404';
import sjAbout from '@/pages/About/About';
import sjSkills from '@/pages/Skills/Skills';
import sjProjects from '@/pages/Projects/Projects';

Vue.use( Router );

export default new Router( {
  mode: 'history',
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
      component: sjSkills,
    }, {
      path: '/projects',
      name: 'projects',
      component: sjProjects,
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
    }, {
      path: '*',
      component: sjError,
    },
  ],
} );
