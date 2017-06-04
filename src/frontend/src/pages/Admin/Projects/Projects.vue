<template src="./Projects.html"></template>
<style scoped src="./Projects.scss"></style>

<script>

  export default {
    name: 'sj-admin-projects',
    data(){
      return {
        name: '',
        description: '',
        git: '',
        url: '',
        message: null,
        projects: [],
        deleting: [],
      };
    },
    methods: {
      sendForm(){
        this.axios.post( 'admin/project', {

        } )
        .then( ( response ) => {
          this.projects.push( response.data );
        } )
        .catch( ( error ) => {
          this.message = error.error;
        } );
      },
      deleteCover( id ){
        if( !this.deleting.includes( id ) ){
          this.deleting.push( id );
          const row = document.getElementById( `project-${id}` );
          const deleteIcon = row.lastElementChild.lastElementChild.firstElementChild;

          deleteIcon.classList.toggle( 'fa-trash-o' );
          deleteIcon.classList.toggle( 'fa-spin' );
          deleteIcon.classList.toggle( 'fa-refresh' );

          this.axios.delete( `admin/project/${id}` )
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
      this.axios.get( 'admin/project' )
      .then( ( response ) => {
        this.projects = response.data;
      } )
      .catch( ( ) => {
      } );
    },
  };
</script>
