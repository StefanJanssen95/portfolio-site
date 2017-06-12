<template src="./CommentForm.html"></template>
<style scoped src="./CommentForm.scss"></style>
<script>
export default {
  name: 'sj-comment-form',
  data(){
    return {
      authorName: '',
      authorEmail: '',
      text: '',
      result: '',
    };
  },
  props: {
    postId: {
      required: true,
      type: Number,
    },
  },
  methods: {
    sendComment(){
      this.axios.post( '/comment', {
        post_id: this.postId,
        author_name: this.authorName,
        author_email: this.authorEmail,
        message: this.text,
      } )
      .then( ( response ) => {
        this.authorName = '';
        this.authorEmail = '';
        this.text = '';
        this.result = 'Message has been received. It has to be approved before it will show up.';
        if( response.data.comment.approved ){
          this.result = 'Message has been approved, refresh to see it.';
        }
      } )
      .catch( () => {
        this.result = 'Something went wrong.';
      } );
    },
  },
};
</script>
