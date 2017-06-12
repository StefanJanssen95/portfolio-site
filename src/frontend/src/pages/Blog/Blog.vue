<template src="./Blog.html"></template>
<style scoped src="./Blog.scss"></style>

<script>
import sjRibbon from '@/components/Ribbon/Ribbon';
import sjBlogPost from '@/components/BlogPost/BlogPost';
import sjLoadingIcon from '@/components/LoadingIcon/LoadingIcon';

export default {
  name: 'sj-blog',
  data(){
    return {
      status: 0,
      posts: [],
    };
  },
  components:{
    sjRibbon,
    sjBlogPost,
    sjLoadingIcon,
  },
  created(){
    this.axios.get( '/blog' )
    .then( ( response ) => {
      this.posts = response.data.posts;
      this.status = 1;
    } )
    .catch( () => {
      this.status = -1;
    } );
  },
};
</script>

