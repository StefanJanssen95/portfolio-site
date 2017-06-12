<template src="./TabGroup.html"></template>
<style scoped src="./TabGroup.scss"></style>

<script>
export default {
  name: 'sj-tab-group',
  data(){
    return {
      activeTab: 0,
    };
  },
  props: {
    tabs: {
      required: true,
      type: Array,
    },
  },
  methods: {
    setActiveTab( id ){
      this.activeTab = id;
    },
  },
};
</script>
