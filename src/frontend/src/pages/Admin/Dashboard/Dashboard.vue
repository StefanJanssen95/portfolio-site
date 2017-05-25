<template src="./Dashboard.html"></template>
<style scoped src="./Dashboard.scss"></style>

<script>

  export default {
    name: 'sj-admin-dashboard',
    data(){
      return {
        pages: [
          {
            title: 'Manage Blog',
            route: '/admin/blog',
          }, {
            title: 'Manage Projects',
            route: '/admin/projects',
          }, {
            title: 'Statistics',
            route: '/admin/stats',
          },
        ],
      };
    },
    components:{
    },
  };
</script>

