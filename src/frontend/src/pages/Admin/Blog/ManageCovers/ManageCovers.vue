<template src="./ManageCovers.html"></template>
<style scoped src="./ManageCovers.scss"></style>

<script>

  export default {
    name: 'sj-admin-manage-covers',
    data(){
      return {
        name: '',
        message: null,
        covers: [],
        loadingStatus: 0,
        deleting: [],
      };
    },
    methods: {
      sendForm(){
        const fileInput = document.querySelector( '#image-upload' );
        const formData = new FormData();

        formData.append( 'image', fileInput.files[0] );
        formData.append( 'name', this.name );

        this.axios.post( 'admin/blog/cover', formData )
        .then( ( response ) => {
          this.message = `Cover (name: ${this.name}) has been added`;
          this.name = '';
          fileInput.value = null;
          this.covers.push( response.data );
        } )
        .catch( ( error ) => {
          this.message = error.error;
        } );
      },
      deleteCover( id ){
        if( !this.deleting.includes( id ) ){
          this.deleting.push( id );
          const row = document.getElementById( `cover-${id}` );
          const deleteIcon = row.lastElementChild.lastElementChild.firstElementChild;

          deleteIcon.classList.toggle( 'fa-trash-o' );
          deleteIcon.classList.toggle( 'fa-spin' );
          deleteIcon.classList.toggle( 'fa-refresh' );

          this.axios.delete( `admin/blog/cover/${id}` )
            .then( ( ) => {
              row.parentElement.removeChild( row );
            } )
            .catch( ( error ) => {
              // eslint-disable-next-line
              console.log( error.response );
              deleteIcon.classList.toggle( 'fa-trash-o' );
              deleteIcon.classList.toggle( 'fa-spin' );
              deleteIcon.classList.toggle( 'fa-refresh' );

              this.deleting.$deleteValue( id );
            } );
        }
      },
    },
    created(){
      this.axios.get( 'admin/blog/cover' )
      .then( ( response ) => {
        this.loadingStatus = 1;
        this.covers = response.data;
      } )
      .catch( ( ) => {
        this.loadingStatus = -1;
      } );
    },
  };
</script>
