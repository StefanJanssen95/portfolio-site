<template src="./Skills.html"></template>
<style scoped src="./Skills.scss"></style>

<script>
  import sjRibbon from '@/components/Ribbon/Ribbon';

  export default {
    name: 'sj-skills',
    data(){
      return {
        logoPath: '../../static/img/skills/',
        skills: [
          {
            logo: 'Angular.svg',
            name: 'Angular',
            tags: [
              'framework',
              'frontend',
              'javascript',
            ],
          }, {
            logo: 'CSS3.svg',
            name: 'CSS3',
            tags: [
              'frontend',
              'css',
            ],
          }, {
            logo: 'Electron.svg',
            name: 'Electron',
            tags: [
              'framework',
              'frontend',
              'javascript',
              'node.js',
            ],
          }, {
            logo: 'Git.svg',
            name: 'Git',
            tags: [
              'project management',
            ],
          }, {
            logo: 'Javascript.svg',
            name: 'Javascript',
            tags: [
              'frontend',
              'javascript',
            ],
          }, {
            logo: 'MySQL.svg',
            name: 'MySQL',
            tags: [
              'backend',
              'databases',
            ],
          }, {
            logo: 'PostCSS.svg',
            name: 'PostCSS',
            tags: [
              'frontend',
              'css',
            ],
          }, {
            logo: 'PHP.svg',
            name: 'PHP',
            tags: [
              'backend',
              'php',
            ],
          }, {
            logo: 'DotNet.svg',
            name: '.NET',
            tags: [
              'microsoft',
              'framework',
            ],
          }, {
            logo: 'Node.js.svg',
            name: 'Node.js',
            tags: [
              'javascript',
              'tooling',
            ],
          }, {
            logo: 'Sass.svg',
            name: 'Sass',
            tags: [
              'frontend',
              'css',
            ],
          }, {
            logo: 'Yeoman.svg',
            name: 'Yeoman',
            tags: [
              'tooling',
            ],
          }, {
            logo: 'Vue.js.svg',
            name: 'Vue.js',
            tags: [
              'frontend',
              'framework',
              'javascript',
            ],
          }, {
            logo: 'docker.svg',
            name: 'Docker',
            tags: [
              'tooling',
            ],
          }, {
            logo: 'Laravel.svg',
            name: 'Laravel',
            tags: [
              'backend',
              'framework',
              'php',
            ],
          },
        ],
      };
    },
    components:{
      sjRibbon,
    },
  };
</script>

