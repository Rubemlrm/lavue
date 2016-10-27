<style></style>

<template>
  <div>
    <navbar></navbar>
    <div class="container-fluid">
      <sidebar></sidebar>

      <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
         <router-view></router-view>
      </div>
    </div>
  </div>
 </template>

<script>

var Vue = require('vue');

export default {

}
</script>