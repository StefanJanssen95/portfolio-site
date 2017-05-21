import Vue from 'vue';
import Router from 'vue-router';
import sjWelcome from '@/pages/Welcome/Welcome';
import sjError from '@/pages/404/404';
import sjAbout from '@/pages/About/About';
import sjSkills from '@/pages/Skills/Skills';
import sjProjects from '@/pages/Projects/Projects';
import sjBlog from '@/pages/Blog/Blog';
import sjPost from '@/pages/Blog/Post/Post';
import sjAdmin from '@/pages/Admin/Admin';
import sjAdminDashboard from '@/pages/Admin/Dashboard/Dashboard';
import sjAdminBlog from '@/pages/Admin/Blog/Blog';

Vue.use( Router );

export default new Router( {
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'welcome',
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
      component: sjBlog,
    }, {
      path: '/blog/:id(\\d+)/*',
      name: 'blog.post',
      component: sjPost,
    }, {
      path: '/admin',
      component: sjAdmin,
      children: [
        {
          alias: '/admin',
          path: '/admin/dashboard',
          name: 'admin.dashboard',
          component: sjAdminDashboard,
        }, {
          path: '/admin/blog',
          name: 'admin.blog',
          component: sjAdminBlog,
        },
      ],
    }, {
      path: '*',
      component: sjError,
      name: 'NotFound',
    },
  ],
} );
