<template src="./Comment.html"></template>
<style scoped src="./Comment.scss"></style>
<script>
export default {
  name: 'sj-comment',
  data(){
    return {

    };
  },
  computed:{
    dateTimeString(){
      const date = new Date( this.comment.datetime );
      let dateString = `${date.getDate() < 10 ? 0 : ''}${date.getDate()}-`;

      dateString += `${date.getMonth() + 1 < 10 ? 0 : ''}${date.getMonth() + 1}-${date.getFullYear()} `;
      dateString += `${date.getHours()}:${date.getMinutes()}`;

      return dateString;
    },
  },
  props: {
    comment: {
      required: true,
      type: Object,
    },
  },
};
</script>
