<template src="./Projects.html"></template>
<style scoped src="./Projects.scss"></style>

<script>
  import sjRibbon from '@/components/Ribbon/Ribbon';
  import sjProject from '@/components/Project/Project';

  export default {
    name: 'sj-projects',
    data(){
      return {
        projects: [
          {
            name: 'Portfolio website',
            description: 'The website you are currently looking at. It\'s made with Laravel and Vue.js, running on a caddy server',
            cover: '../../static/img/projects/portfolio.png',
          },
        ],
      };
    },
    components:{
      sjRibbon,
      sjProject,
    },
  };
</script>

