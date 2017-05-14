<template src="./Welcome.html"></template>
<style scoped src="./Welcome.scss"></style>

<script>
export default {
  name: 'sj-welcome',
  data(){
    return {
      typedText:         '',
      maxDuration:       1500,
      maxDelayPerLetter: 500,
    };
  },
  created(){
    // TODO: Retrieve with an API request
    let text = 'a fullstack developer.';
    const delay = Math.min( this.maxDuration / text.length, this.maxDelayPerLetter );
    const self = this;
    const interval = window.setInterval( () => {
      self.typedText += text[0];
      text = text.substr( 1 );
      if( text.length === 0 ){
        clearInterval( interval );
      }
    }, delay );
  },
};
</script>

