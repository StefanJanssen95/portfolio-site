<template src="./ImageSelector.html"></template>
<style scoped src="./ImageSelector.scss"></style>
<script>
export default {
  name: 'sj-image-selector',
  data(){
    return {
      selected: 0,
    };
  },
  props: {
    options: {
      type: Array,
      required: true,
    },
    name: {
      type: String,
      required: true,
    },
    value: {
      type: Number,
      required: true,
    },
  },
  methods: {
    toggleList( ){
      const ul = this.$el.children[1];

      ul.classList.toggle( 'select--collapsed' );
    },
    select( id ){
      this.selected = id;
      this.$emit( 'input', this.getSelectedId() );
    },
    getSelectedId(){
      if( this.options[this.selected] ){
        if( this.options[this.selected].id ){
          return this.options[this.selected].id;
        }
      }
      return this.selected;
    },
  },
};
</script>
