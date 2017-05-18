<template src="./Projects.html"></template>
<style scoped src="./Projects.scss"></style>

<script>
  import sjRibbon from '@/components/Ribbon/Ribbon';
  import sjProject from '@/components/Project/Project';
  import sjLoadingIcon from '@/components/LoadingIcon/LoadingIcon';

  export default {
    name: 'sj-projects',
    data(){
      return {
        projects: [],
        status: 0,
      };
    },
    components: {
      sjRibbon,
      sjProject,
      sjLoadingIcon,
    },
    created(){
      this.axios.get( '/projects/' )
        .then( ( response ) => {
          this.status = 1;
          this.projects = response.data;
        } )
        .catch( ( error ) => {
          this.status = -1;
          console.log( error );
        } );
    },
  };
</script>

