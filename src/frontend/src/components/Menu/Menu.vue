<template src="./Menu.html"></template>
<style scoped src="./Menu.scss"></style>
<script>
export default {
  name: 'sj-menu',
  data(){
    return {
      menuItems: [
        {
          name: 'about',
          to:   { name: 'about' },
          text: 'ABOUT ME',
          icon: 'user',
        }, {
          name: 'skills',
          to:   { name: 'skills' },
          text: 'SKILLS',
          icon: 'cogs',
        }, {
          name: 'projects',
          to:   { name: 'projects' },
          text: 'PROJECTS',
          icon: 'code-fork',
        }, {
          name: 'blog',
          to:   { name: 'blog' },
          text: 'BLOG',
          icon: 'comment',
        },
      ],
    };
  },
  computed: {
    currentPage(){
      return this.$route.name.split( '.' )[0];
    },
  },
  methods:{
    signOut(){
      window.localStorage.removeItem( 'user' );
      this.$router.push( '/' );
    },
    isSignedIn(){
      const authUser = window.localStorage.getItem( 'user' );

      return !!( authUser && JSON.parse( authUser ).jwt );
    },
  },
};
</script>
