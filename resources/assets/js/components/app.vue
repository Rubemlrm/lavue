<style></style>

<template>
 <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
     <navbar></navbar>
      <sidebar></sidebar>
       <main class="mdl-layout__content mdl-color--grey-100">
            <router-view></router-view>
        </main>
 </div>


 </template>

<script>

var Vue = require('vue');

export default {

}
</script>