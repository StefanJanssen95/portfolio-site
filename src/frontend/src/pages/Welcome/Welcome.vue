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
      texts: [],
      textIndex: 0,
    };
  },
  methods: {
    startTyping(){
      this.text = this.texts[this.textIndex];
      const delay = Math.min( this.maxDuration / this.text.length, this.maxDelayPerLetter );
      const self = this;
      const interval = window.setInterval( () => {
        self.typedText += self.text[0];
        self.text = self.text.substr( 1 );
        if( self.text.length === 0 ){
          clearInterval( interval );
          if( self.texts.length > 1 ){
            self.textIndex++;
            if( self.textIndex >= self.texts.length ){ self.textIndex = 0; }
            window.setTimeout( self.clearTypedText, 2000 );
          }
        }
      }, delay );
    },
    clearTypedText(){
      if( this.typedText.length > 0 ){
        const interval = window.setInterval( () => {
          this.typedText = this.typedText.slice( 0, -1 );
          if( this.typedText.length === 0 ){
            clearInterval( interval );
            window.setTimeout( this.startTyping, 1000 );
          }
        }, 50 );
      }
    },
  },
  created(){
    this.axios.get( '/welcome', { timeout: 3000 } )
      .then( ( response ) => {
        this.texts = response.data.text;
        this.textIndex = Math.floor( Math.random() * this.texts.length );
        this.startTyping();
      } )
      .catch( () => {
        this.texts = ['a full-stack developer.'];
        this.textIndex = 0;
        this.startTyping();
      } );
  },
};
</script>

