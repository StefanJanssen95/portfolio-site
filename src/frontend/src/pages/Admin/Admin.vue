<template src="./Admin.html"></template>
<style scoped src="./Admin.scss"></style>

<script>
  import sjRibbon from '@/components/Ribbon/Ribbon';

  export default {
    name: 'sj-admin',
    data(){
      return {
      };
    },
    components:{
      sjRibbon,
    },
    methods: {
      showBackButton(){
        return ( this.$router.currentRoute.name !== 'admin.dashboard' && this.$router.currentRoute.name !== 'admin.login' );
      },
    },
  };
</script>

