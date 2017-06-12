<template src="./PostEditor.html"></template>
<style scoped src="./PostEditor.scss"></style>

<script>
  import sjImageSelector from '@/components/ImageSelector/ImageSelector';

  export default {
    name: 'sj-admin-post-editor',
    data(){
      return {
        title: '',
        description: '',
        markdown: '',
        publishDate: this.resetDate(),
        message: null,
        covers: [{
        }],
        cover_id: 0,
      };
    },
    computed: {
      markdownWarning(){
        if( this.markdown.match( /(^[\s]*#)[^#]/ ) ){
          return 'You should set the title in the title field instead.';
        }
        return '';
      },
      dateWarning(){
        const date = new Date( this.publishDate ).getTime();
        let warning = '';

        if( date - ( new Date() ) < 0 ){ warning = 'This date is in the past'; }
        return warning;
      },
    },
    methods: {
      sendForm(){
        this.axios.post( 'admin/blog', {
          name: this.title,
          description: this.description,
          markdown: this.markdown,
          publish_date: this.publishDate,
          blog_cover_id: this.cover_id,
        } )
        .then( ( response ) => {
          this.message = `Post (id: ${response.data.id}) has been added`;
          this.title = '';
          this.description = '';
          this.markdown = '';
          this.publishDate = this.resetDate();
        } )
        .catch( ( error ) => {
          this.message = error.error;
        } );
      },
      resetDate(){
        // TODO: check at the last day of the month
        const date = new Date();

        if( date.getHours() >= 19 ){ date.setDate( date.getDate() + 1 ); }
        let dateString = `${date.getFullYear()}-`;

        dateString += `${date.getMonth() + 1 < 10 ? 0 : ''}${date.getMonth() + 1}-`;
        dateString += `${date.getDate() < 10 ? 0 : ''}${date.getDate()}`;

        dateString += 'T19:00';

        return dateString;
      },
    },
    created(){
      this.axios.get( 'admin/blog/cover' )
        .then( ( response ) => {
          this.loadingStatus = 1;
          this.covers = response.data;
          this.cover_id = this.covers[0].id;
        } )
        .catch( () => {
          this.loadingStatus = -1;
        } );
    },
    components: {
      sjImageSelector,
    },
  };
</script>
