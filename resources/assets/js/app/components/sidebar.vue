
<template>

  <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
      <div>
        <div class="main">
          <div class="title">
            <figure class="image is-64x64">
              <img src="http://placehold.it/64x64">
            </figure>

            <p class="control has-addons">
              <input class="input" type="text" placeholder="Find a repository">
              <a class="is-info">
                Search
              </a>
            </p>

          </div>
          <ul class="menu-list">
                <li><router-link to="/users">
                  <i class="fa fa-circle-o"></i>Users
                  </router-link>
                </li>

              <li>
              <a href="../../index2.html" class="is-outlined
">
                <i class="fa fa-circle-o"></i> Roles
              </a>
              </li>

          <li><a href="" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a></li>
        </ul>
        </div>
      </div>
    </aside>
</template>

<script>
  export default {
    created() {

    }
  };
</script>