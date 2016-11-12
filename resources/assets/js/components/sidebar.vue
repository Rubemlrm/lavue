<style></style>

<template>

       <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="https://api.adorable.io/avatars/123/abott@adorable.png" class="demo-avatar">
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <router-link to="/users">
          <a class="mdl-navigation__link" href="/users"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i>Users</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>Roles</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">content_paste</i>Logs</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Settings</a>
        </nav>
      </div>
</template>

<script>
    export default {
    };
</script>