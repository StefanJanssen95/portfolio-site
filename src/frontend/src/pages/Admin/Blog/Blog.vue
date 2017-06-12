<template src="./Blog.html"></template>
<style scoped src="./Blog.scss"></style>

<script>
  import sjTabGroup from '@/components/TabGroup/TabGroup';
  import sjManagePosts from '@/pages/Admin/Blog/ManagePosts/ManagePosts';
  import sjPostEditor from '@/pages/Admin/Blog/PostEditor/PostEditor';
  import sjManageCovers from '@/pages/Admin/Blog/ManageCovers/ManageCovers';
  import sjManageComments from '@/pages/Admin/Blog/ManageComments/ManageComments';

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
            title: 'Manage Covers',
            component: sjManageCovers,
          }, {
            title: 'Manage Comments',
            component: sjManageComments,
          },
        ],
      };
    },
    components:{
      sjTabGroup,
    },
  };
</script>

