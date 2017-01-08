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
          errors: new Errors(),
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
          var _response = response.body;
          if(_response.status == "error") {
            this.errors.store(_response.errors);
            var results = {
              type: 'is-danger',
              message: _response.message,
              show: true
            };
            Event.$emit('displayAlert', results);
            return this.errors;
          } else {
            var results = {
              type: 'is-success',
              message: _response.message,
              show: true
            };
            Event.$emit('displayAlert', results);
            this.errors.destroy();
          }
        }, (response) => {
          console.log(_response);
          });
        },
    },
    components: {
      'userForm': userForm
    }
  }

</script>