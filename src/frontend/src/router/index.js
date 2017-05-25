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
import sjAdminLogin from '@/pages/Admin/Login/Login';
import sjAdminDashboard from '@/pages/Admin/Dashboard/Dashboard';
import sjAdminBlog from '@/pages/Admin/Blog/Blog';

Vue.use( Router );

const router = new Router( {
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
          path: '/admin/login',
          name: 'admin.login',
          component: sjAdminLogin,
        }, {
          path: '/admin/dashboard',
          name: 'admin.dashboard',
          component: sjAdminDashboard,
          meta: { requiresAuth: true },
        }, {
          path: '/admin/blog',
          name: 'admin.blog',
          component: sjAdminBlog,
          meta: { requiresAuth: true },
        },
      ],
    }, {
      path: '*',
      component: sjError,
      name: 'NotFound',
    },
  ],
} );

router.beforeEach( ( to, from, next ) => {
  if( to.matched.some( ( record ) => record.meta.requiresAuth ) ){
    const a = true;

    if( a ){
      next( {
        path: '/admin/login',
        query: { redirect: to.fullPath },
      } );
    }else{
      next();
    }
  }else{
    next();
  }
} );

export default router;
