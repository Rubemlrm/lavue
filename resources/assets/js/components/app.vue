<style></style>

<template>
    <div>
   <sidebar></sidebar>
   <navbar></navbar>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sidebar Collapsed
        <small>Layout with collapsed sidebar on load</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Collapsed Sidebar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <template v-if="$route.matched.length">
          <router-view></router-view>
        </template>
        <template v-else>
          <p>You are logged {{ loggedIn ? 'in' : 'out' }}</p>
        </template>
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
 </template>

<script>
import navbar from './navbar.vue'
import sidebar from './sidebar.vue'
export default {
    components: {
        navbar: navbar,
        sidebar: sidebar
    }
}
</script>