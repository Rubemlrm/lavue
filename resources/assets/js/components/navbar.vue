<style>
</style>
<template>
   <nav class="nav has-shadow" id="top">
        <div class="container">
          <div class="nav-right">
            <a href="" class="nav-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu is-hidden-tablet">
            <a href="#" class="nav-item is-active">
              Dashboard
            </a>
            <a href="#" class="nav-item">
              Activity
            </a>
            <a href="#" class="nav-item">
              Timeline
            </a>
            <a href="#" class="nav-item">
              Folders
            </a>
          </div>
        </div>
      </nav>
</template>

<script>
  export default {

  };
</script>
