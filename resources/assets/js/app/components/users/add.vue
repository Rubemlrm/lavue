<style></style>

<template>
  <div class="row">
    <div class="col-md-10">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <userForm :user="user"></userForm>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" @click="addUser()">
              Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
  </div>
</template>


<script>
  import userForm from './form.vue'
    export default {

      data() {
        return {
          user: {
            name: '',
            password: '',
            email: '',
            role_id: '1'
          },
        }
      },

    created() {
      var vm = this;
    },

    methods: {
      addUser() {
        var vm = this;
        var data = {
          email: this.user.email,
          name: this.user.name,
          password: this.user.password,
          password2: this.user.password2,
          role_id: this.user.role_id
        };

        this.$http.post('/api/users', data).then((response) => {
          if(response.body.status == "error") {
            console.log(response.body.errors);
          } else {
            console.log(response.body.success);
          }
          console.log(response);
        }, (response) => {
          console.log(response.body);
          });
        },
    },
    components: {
      'userForm': userForm
    }
  }

</script>