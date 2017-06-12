<template>
  <div id="app">
    <sj-menu></sj-menu>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import sjMenu from '@/components/Menu/Menu';

export default {
  name: 'app',
  components: {
    sjMenu,
  },
};
</script>

<style src="../static/vendor/css/font-awesome.min.css"></style>
<style src="../static/vendor/css/Roboto.css"></style>
<style src="../static/vendor/css/normalize.min.css"></style>
<style src="../static/scss/_table.scss"></style>
<style src="../static/scss/_btn.scss"></style>
<style src="../static/scss/_elements.scss"></style>
<style>
  @import "../static/scss/_import.scss";

  *{
    box-sizing: border-box;
  }
  .no-select{
    user-select: none;
  }

  .clickable{
    cursor: pointer;
  }
</style>



<style scoped>
  @import "../static/scss/_import.scss";

  .container{
    margin-left: $menu-width;
    width: calc( 100vw - $menu-width );
    min-height: 100vh;

    display: flex;
    flex-direction: row;
    justify-content: center;

    background-color: $blue-light;
    overflow-y: scroll
  }
</style>
