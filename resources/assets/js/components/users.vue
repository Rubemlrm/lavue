<style></style>

<template>


      <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
              <tr v-for="user in users">
                  <td>{{user.id}}</td>
                  <td>{{user.name}}</td>
                  <td>{{user.email}}</td>
                  <td>{{user.role_id}}</td>

              </tr>

              </tbody>
            </table>
          </div>
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
        }
    }

}

</script>