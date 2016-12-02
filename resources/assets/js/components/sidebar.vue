<style></style>

<template>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://api.adorable.io/avatars/160/abott@adorable.png"
            class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rubem Mota</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control"
            placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn"
              class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Users Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <router-link to="/users">
                <i class="fa fa-circle-o"></i>Users
                </router-link>
            </li>
            <li>
              <a href="../../index2.html">
                <i class="fa fa-circle-o"></i> Roles
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

</template>

<script>
  export default {
    created() {

    }
  };
</script>