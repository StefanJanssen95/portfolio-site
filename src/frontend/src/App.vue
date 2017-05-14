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

<style scoped>
  @import "../static/scss/_import.scss";

  .container{
    margin-left: $menu-width;
    width: calc( 100vw - $menu-width );
    min-height: 100vh;
  }
</style>

<style>
  @import "../static/scss/_import.scss";

  *{
    box-sizing: border-box;
  }
</style>
