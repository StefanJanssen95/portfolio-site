// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue';
import Axios from 'axios';
import VueAxios from 'vue-axios';

import App from './App';
import router from './router';

Vue.config.productionTip = false;

const axios = Axios.create( {
  baseURL: 'https://localhost:443/api/',
} );

axios.interceptors.request.use( ( config ) => {
  const authUser = window.localStorage.getItem( 'user' );


  if( authUser && JSON.parse( authUser ) ){
    // eslint-disable-next-line
    config.headers.authorization = JSON.parse( authUser ).jwt;
  }
  return config;
} );

Vue.use( VueAxios, axios );

/* eslint-disable no-new */
new Vue( {
  el: '#app',
  router,
  template: '<App/>',
  components: { App },
} );

// eslint-disable-next-line
Array.prototype.$deleteValue = function( val ){
  for( let i = this.length - 1; i >= 0; i-- ){
    if( this[i] === val ){
      this.splice( i, 1 );
    }
  }
};
