<style></style>

<template>

<div class="mdl-grid demo-content">
  <div class="mdl-cell mdl-cell--1-offset">
    <h2> User List</h2>
  </div>
            <table class="mdl-data-table mdl-shadow--2dp mdl-cell--10-col mdl-cell--1-offset">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
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
        Allow this site to collect usage data to improve your experience?
      </p>
    </div>
    <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
      <button type="button" class="mdl-button">Agree</button>
      <button type="button" class="mdl-button close" @click="hideModal">Disagree</button>
    </div>
  </dialog>
</div>



</template>

<script>

export default {

    data: function() {
        return { users : []}
    },

    created: function() {
        var vm = this;
        this.updateList();
    },

    methods: {
        updateList: function() {
             this.$http.get('/api/users').then((response) => {
                this.users = response.body;
              }, (response) => {
                console.log(response);
              });
        },
        showModal: function() {
          var dialog = document.querySelector('dialog');

          if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          dialog.showModal();
        },
        hideModal: function() {
           var dialog = document.querySelector('dialog');
           dialog.close();
        }
    }

}

</script>