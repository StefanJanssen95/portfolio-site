<template src="./Blog.html"></template>
<style scoped src="./Blog.scss"></style>

<script>
  import sjTabGroup from '@/components/TabGroup/TabGroup';
  import sjManagePosts from '@/pages/Admin/Blog/ManagePosts/ManagePosts';
  import sjPostEditor from '@/pages/Admin/Blog/PostEditor/PostEditor';

  export default {
    name: 'sj-admin',
    data(){
      return {
        tabs: [
          {
            title: 'Manage Posts',
            component: sjManagePosts,
          }, {
            title: 'Add Post',
            component: sjPostEditor,
          }, {
            title: 'Manage Tags',
            component: '',
          }, {
            title: 'Manage Covers',
            component: '',
          },
        ],
      };
    },
    components:{
      sjTabGroup,
    },
  };
</script>

