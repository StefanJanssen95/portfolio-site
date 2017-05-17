<template src="./Welcome.html"></template>
<style scoped src="./Welcome.scss"></style>

<script>
export default {
  name: 'sj-welcome',
  data(){
    return {
      text: '',
      typedText: '',
      maxDuration: 1500,
      maxDelayPerLetter: 500,
    };
  },
  methods: {
    startTyping(){
      const delay = Math.min( this.maxDuration / this.text.length, this.maxDelayPerLetter );
      const self = this;
      const interval = window.setInterval( () => {
        self.typedText += self.text[0];
        self.text = self.text.substr( 1 );
        if( self.text.length === 0 ){
          clearInterval( interval );
        }
      }, delay );
    },
  },
  created(){
    this.axios.get( '/welcome/random' )
      .then( ( response ) => {
        this.text = response.data.text;
        this.startTyping();
      } )
      .catch( () => {
        this.text = 'a full-stack developer.';
        this.startTyping();
      } );
  },
};
</script>

