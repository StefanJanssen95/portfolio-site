<template src="./404.html"></template>
<style scoped src="./404.scss"></style>

<script>
export default {
  name: 'sj-error',
  data(){
    return {
      typedText:         '',
      maxDuration:       2500,
    };
  },
  created(){
    // TODO: Retrieve with an API request
    let text = 'I tried my best to find the page you were looking for :\'(';
    const delay = this.maxDuration / text.length;
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

