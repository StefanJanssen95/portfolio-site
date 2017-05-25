<template src="./BlogPost.html"></template>
<style scoped src="./BlogPost.scss"></style>
<script>
export default {
  name: 'sj-blog-post',
  data(){
    return {

    };
  },
  computed:{
    dateString(){
      const date = new Date( this.post.publish_date );

      return `${date.getDate() < 10 ? 0 : ''}${date.getDate()}-${date.getMonth() + 1 < 10 ? 0 : ''}${date.getMonth() + 1}-${date.getFullYear()}`;
    },
    postUrl(){
      return `/blog/${this.post.id}/${this.post.name.toLowerCase().replace( / /g, '-' )}`;
    },
  },
  props: {
    post: {
      required: true,
      type: Object,
    },
  },
};
</script>
