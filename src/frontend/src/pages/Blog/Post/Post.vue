<template src="./Post.html"></template>
<style scoped src="./Post.scss"></style>

<script>
import sjRibbon from '@/components/Ribbon/Ribbon';
import sjLoadingIcon from '@/components/LoadingIcon/LoadingIcon';

export default {
  name: 'sj-post',
  data(){
    return {
      status: 0,
      post: {
        name: 'LOADING',
      },
    };
  },
  components:{
    sjRibbon,
    sjLoadingIcon,
  },
  created(){
    this.axios.get( `/blog/${this.$route.params.id}` )
    .then( ( response ) => {
      console.log( response );
      this.post = response.data.post;
      this.status = 1;
    } )
    .catch( () => {
      this.status = -1;
    } );
  },
};
</script>

