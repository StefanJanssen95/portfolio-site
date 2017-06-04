<template src="./ManageComments.html"></template>
<style scoped src="./ManageComments.scss"></style>

<script>

  export default {
    name: 'sj-admin-manage-comments',
    data(){
      return {
        pendingComments: [],
        approvedComments: [],
        inProgress: [],
      };
    },
    methods: {
      deleteComment( id ){
        if( !this.inProgress.includes( id ) ){
          this.inProgress.push( id );
          const row = document.getElementById( `comment-${id}` );
          const deleteIcon = row.lastElementChild.lastElementChild.firstElementChild;

          deleteIcon.classList.toggle( 'fa-trash-o' );
          deleteIcon.classList.toggle( 'fa-spin' );
          deleteIcon.classList.toggle( 'fa-refresh' );

          this.axios.delete( `admin/blog/comment/${id}` )
          .then( ( ) => {
            row.parentElement.removeChild( row );
          } )
          .catch( ( error ) => {
            // eslint-disable-next-line
            console.log( error.response );
            deleteIcon.classList.toggle( 'fa-trash-o' );
            deleteIcon.classList.toggle( 'fa-spin' );
            deleteIcon.classList.toggle( 'fa-refresh' );

            this.inProgress.$deleteValue( id );
          } );
        }
      },
      approveComment( id ){
        if( !this.inProgress.includes( id ) ){
          this.inProgress.push( id );
          const row = document.getElementById( `comment-${id}` );
          const deleteIcon = row.lastElementChild.firstElementChild.firstElementChild;

          deleteIcon.classList.toggle( 'fa-check-o' );
          deleteIcon.classList.toggle( 'fa-spin' );
          deleteIcon.classList.toggle( 'fa-refresh' );

          this.axios.post( `admin/blog/comment/${id}` )
          .then( ( ) => {
            row.parentElement.removeChild( row );
          } )
          .catch( ( error ) => {
            // eslint-disable-next-line
            console.log( error.response );
            deleteIcon.classList.toggle( 'fa-check-o' );
            deleteIcon.classList.toggle( 'fa-spin' );
            deleteIcon.classList.toggle( 'fa-refresh' );

            this.inProgress.$deleteValue( id );
          } );
        }
      },
    },
    created(){
      this.axios.get( 'admin/blog/comment/approved/0' )
      .then( ( response ) => {
        this.pendingComments = response.data;
      } )
      .catch( ( error ) => {
        // eslint-disable-next-line
        console.log( error );
        // eslint-disable-next-line
        console.log( error.response );
      } );

      this.axios.get( 'admin/blog/comment/approved/1' )
      .then( ( response ) => {
        this.approvedComments = response.data;
      } )
      .catch( ( error ) => {
        // eslint-disable-next-line
        console.log( error );
        // eslint-disable-next-line
        console.log( error.response );
      } );
    },
  };
</script>

