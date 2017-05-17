<template src="./Menu.html"></template>
<style scoped src="./Menu.scss"></style>
<script>
export default {
  name: 'sj-menu',
  data(){
    return {
      currentPage: 'welcome',
      menuItems: [
        {
          name: 'about',
          to:   { name: 'about' },
          text: 'ABOUT ME',
          icon: 'user',
        }, {
          name: 'skills',
          to:   { name: 'skills' },
          text: 'SKILLS',
          icon: 'cogs',
        }, {
          name: 'projects',
          to:   { name: 'projects' },
          text: 'PROJECTS',
          icon: 'code-fork',
        }, {
          name: 'blog',
          to:   { name: 'blog' },
          text: 'BLOG',
          icon: 'comment',
        },
      ],
      baseApi: 'https://localhost:443/',

    };
  },
};
</script>
