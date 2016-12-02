<style></style>

<template>
  <div>
    <section class="content-header">
      <h1>User List</h1>
    </section>
    <section class="content">
      <div class="row">
          <div class="col-xs-12">
            <div class="box with-border">
              <div class="box-header"></div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
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
                          <a @click="showModal">
                            <i class="fa fa-edit"></i>
                          </a>
                        </router-link>
                        <a @click="showModal">
                          <i class="fa fa-ban"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <router-link to="/users/add">
              <button class="btn btn-info pull-right" >Add</button>
            </router-link>
          </div>
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