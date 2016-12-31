<style></style>

<template>
<div class="column is-full-desktop is-full-mobile">
  <section class="panel">
    <p class="panel-heading">
      Users
    </p>
    <div class="panel-block">
      <table class="table is-bordered is-striped is-narrow">
        <thead>
          <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users">
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            <td>{{user.role.name}}</td>
            <td>
              <div class="control is-grouped">
                <p class="control">
                  <router-link to="/users/edit">
                    <a class="button is-primary">
                      <i class="fa fa-edit"></i>  Edit
                    </a>
                  </router-link>
                </p>
                <p class="control">
                  <a class="button is-danger" @click="showModal">
                    <i class="fa fa-ban"></i> Delete
                  </a>
                </p>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    <p class="control">
      <router-link to="/users/add">
        <button class="button is-primary" >Add</button>
      </router-link>
    </p>
    </div>
  </section>
</div>
</template>

<script>
  export default {

    data() {
      return { users : []}
    },

    created() {

      var vm = this;
      this.updateList();
    },

    methods: {

      //Get uer list
      updateList() {
        this.$http.get('/api/users').then((response) => {
          this.users = response.body;
        }, (response) => {
          console.log(response);
        });
      },

      deleteUser() {

      },

      showModal() {
        var dialog = document.querySelector('dialog');
        if (! dialog.showModal) {
          dialogPolyfill.registerDialog(dialog);
        }
        dialog.showModal();
      },

      hideModal() {
        var dialog = document.querySelector('dialog');
        dialog.close();
      }
    }
  }
</script>