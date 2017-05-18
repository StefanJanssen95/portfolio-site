<template src="./Blog.html"></template>
<style scoped src="./Blog.scss"></style>

<script>
import sjRibbon from '@/components/Ribbon/Ribbon';
// import sjBlog from '@/components/Blog/Blog';
import sjLoadingIcon from '@/components/LoadingIcon/LoadingIcon';

export default {
  name: 'sj-blog',
  data(){
    return {
      status: 0,
    };
  },
  components:{
    sjRibbon,
    // sjBlog,
    sjLoadingIcon,
  },
  created(){

  },
};
</script>

