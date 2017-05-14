<template src="./404.html"></template>
<style scoped src="./404.scss"></style>

<script>
export default {
  name: 'sj-error',
  data(){
    return {
      typedText:         '',
      maxDuration:       1500,
      maxDelayPerLetter: 500,
    };
  },
  created(){
    // TODO: Retrieve with an API request
    let text = 'Page doesn\'t exist :\'(';
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

