<template src="./Ribbon.html"></template>
<style scoped src="./Ribbon.scss"></style>
<script>
export default {
  name: 'sj-ribbon',
  props: {
    title: {
      required: true,
      type: String,
    },
    icon: {
      required: true,
      type: String,
    },
  },
};
</script>
