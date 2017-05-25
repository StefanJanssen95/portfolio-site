<template src="./Login.html"></template>
<style scoped src="./Login.scss"></style>

<script>

  export default {
    name: 'sj-admin-login',
    data(){
      return {
        email: 'example@gmail.com',
        password: 'test',
      };
    },
    methods: {
      login(){
        this.axios.post( '/login', {
          email: this.email,
          password: this.password,
        } )
        .then( () => {

        } )
        .catch( () => {

        } );
      },
    },
  };
</script>

