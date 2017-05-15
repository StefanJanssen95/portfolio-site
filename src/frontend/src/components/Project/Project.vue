<template src="./Project.html"></template>
<style scoped src="./Project.scss"></style>
<script>
export default {
  name: 'sj-project',
  data(){
    return {
      color: Math.floor( Math.random() * 6 ) + 1,
    };
  },
  props: {
    project: {
      /*
      * {
      *   name: "Lorem Ipsum",
      *   description: "Lorem ipsum solor dit amet",
      *   cover: "../../static/projects/loremipsum.png",
      * }
      */
      required: true,
      type: Object,
    },
  },
};
</script>
