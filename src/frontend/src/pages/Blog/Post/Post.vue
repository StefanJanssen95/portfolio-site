<template src="./Post.html"></template>
<style  src="./Post.scss"></style>
<style src="../../../../static/scss/highlightjs/_highlighter.scss"></style>

<script>
import sjRibbon from '@/components/Ribbon/Ribbon';
import sjLoadingIcon from '@/components/LoadingIcon/LoadingIcon';
import sjComment from '@/components/Comment/Comment';
import sjCommentForm from '@/components/CommentForm/CommentForm';

export default {
  name: 'sj-post',
  data(){
    return {
      postId: this.$route.params.id,
      statusPost: 0,
      statusComments: 0,
      post: { name: 'LOADING' },
      comments: {},
    };
  },
  components:{
    sjRibbon,
    sjLoadingIcon,
    sjComment,
    sjCommentForm,
  },
  created(){
    this.postId = parseInt( this.postId, 10 );
    this.axios.get( `/blog/${this.postId}` )
    .then( ( response ) => {
      this.post = response.data.post;
      this.statusPost = 1;
    } )
    .catch( () => {
      this.statusPost = -1;
    } );

    this.axios.get( `/blog/${this.postId}/comments/` )
    .then( ( response ) => {
      this.comments = response.data.comments;
      this.statusComments = 1;
    } )
    .catch( () => {
      this.statusComments = -1;
    } );
  },
};
</script>

