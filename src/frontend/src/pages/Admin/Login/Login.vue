<template src="./Login.html"></template>
<style scoped src="./Login.scss"></style>

<script>

  export default {
    name: 'sj-admin-login',
    data(){
      return {
        email: '',
        password: '',
        message: '',
      };
    },
    methods: {
      login(){
        // TODO: Set client secret to seperate file
        this.axios.post( 'https://localhost/oauth/token', {
          grant_type: 'password',
          client_secret: 'OJlBngBAee5NFTW7QmQVe281K8FecHHV3rrTkWjR',
          client_id: '1',
          username: this.email,
          password: this.password,
        } )
        .then( ( response ) => {
          const authUser = {};

          authUser.jwt = `${response.data.token_type} ${response.data.access_token}`;
          authUser.refreshToken = response.data.refresh_token;
          window.localStorage.setItem( 'user', JSON.stringify( authUser ) );
          this.$router.push( '/admin/dashboard/' );
        } )
        .catch( ( error ) => {
          if( error.response ){
            this.message = error.response.data.message;
          }else{
            this.message = 'Something went wrong.';
            console.error( error );
          }
        } );
      },
    },
    created(){
      const authUser = window.localStorage.getItem( 'user' );

      if( authUser && JSON.parse( authUser ).jwt ){
        this.$router.push( '/admin/dashboard/' );
      }
    },
  };
</script>

