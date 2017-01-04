<style></style>

<template>
      <!-- general form elements -->
      <section class="panel">
       <p class="panel-heading">
             Add User
        </p>
        <div class="panel-block">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" @submit.prevent="addUser">
          <userForm :user="user" :errors="errors"></userForm>
          <!-- /.box-body -->

          <div class="control">
            <button type="submit" class="button is-primary">
              Submit</button>

            <button type="reset" class="button is-danger">
                  Cancel
            </button>
          </div>
        </form>
      </div>
      </section>
      <!-- /.box -->
</template>


<script>
  import userForm from './form.vue'
  import Errors from '../../helpers/errors.js'
    export default {

      data() {
        return {
          user: {
            name: '',
            password: '',
            email: '',
            role_id: '1'
          },
          errors: {},
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
            this.errors =response.body.errors ;
            return this.errors;
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