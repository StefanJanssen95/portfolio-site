<template src="./Admin.html"></template>
<style scoped src="./Admin.scss"></style>

<script>
  import sjRibbon from '@/components/Ribbon/Ribbon';
  import sjTabGroup from '@/components/TabGroup/TabGroup';

  export default {
    name: 'sj-admin',
    data(){
      return {
        pages: [
          {
            title: 'Blog',
            route: '/admin/blog',
          }, {
            title: 'Projects',
            route: '/admin/projects',
          }, {
            title: 'Statistics',
            route: '/admin/stats',
          },
        ],
      };
    },
    components:{
      sjRibbon,
      sjTabGroup,
    },
  };
</script>

