<template src="./ManagePosts.html"></template>
<style scoped src="./ManagePosts.scss"></style>

<script>

  export default {
    name: 'sj-admin-manage-posts',
    data(){
      return {
        posts: [],
        status: 0,
      };
    },
    methods: {
      deletePost( id ){
        const row = document.getElementById( `post-${id}` );
        const deleteIcon = row.lastElementChild.lastElementChild.firstElementChild;

        deleteIcon.classList.toggle( 'fa-trash-o' );
        deleteIcon.classList.toggle( 'fa-spin' );
        deleteIcon.classList.toggle( 'fa-refresh' );

        this.axios.delete( `/blog/${id}` )
        .then( ( ) => {
          row.parentElement.removeChild( row );
        } )
        .catch( ( error ) => {
          // eslint-disable-next-line
          console.log( error );
          deleteIcon.classList.toggle( 'fa-trash-o' );
          deleteIcon.classList.toggle( 'fa-spin' );
          deleteIcon.classList.toggle( 'fa-refresh' );
        } );
      },
    },
    created(){
      this.axios.get( '/blog/' )
      .then( ( response ) => {
        this.status = 1;
        this.posts = response.data;
      } )
      .catch( ( ) => {
        this.status = -1;
      } );
    },
  };
</script>

