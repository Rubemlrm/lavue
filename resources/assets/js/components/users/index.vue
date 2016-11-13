<style></style>

<template>

<div class="mdl-grid demo-content">
  <div class="mdl-cell mdl-cell--1-offset">
    <h4> User List</h4>
  </div>
            <table class="mdl-data-table mdl-shadow--2dp mdl-cell--10-col mdl-cell--1-offset">
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

                  <router-link to="/users/edit">
                    <button class="mdl-button mdl-button--icon">
                        <i class="material-icons">edit</i>
                    </button>
                  </router-link>

                    <button class="mdl-button mdl-button--icon"  @click="showModal">
                      <i class="material-icons">delete</i>
                    </button>

              </td>
              </tr>
              </tbody>
            </table>

            <div class="mdl-cell mdl-cell--1-col mdl-cell--10-offset">
              <router-link to="/users/add">
              <button class="mdl-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
                <i class="material-icons">person_add</i> Add
            </button>
            </router-link>
            </div>

            <dialog class="mdl-dialog">
    <div class="mdl-dialog__content">
      <p>
        Do you want delete this user ?
      </p>
    </div>
    <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
      <button type="button" class="mdl-button" @click="deleteUser">Agree</button>
      <button type="button" class="mdl-button close" @click="hideModal">Disagree</button>
    </div>
  </dialog>
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