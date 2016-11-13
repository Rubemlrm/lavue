<style></style>

<template>
    <div class="mdl-grid demo-content">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

  <main class="mdl-layout__content">

    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <h4>Add User</h4>
      </div>
    </div>


    <div class="mdl-grid md-cell--4-offset ">
      <div class="mdl-cell mdl-cell--8-col">
        <form action="#" >


          <userForm :user="user"></userForm>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--10-col">
              <button id="login" type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored" style="width:80px;" @click="addUser">
              Save
            </button>
            </div>
        </form>




  </main>
  </div>

  <div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
    </div>
    </div>

</template>


<script>
  import userForm from './form.vue'
    export default {
      props: ["user_id"],
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
            this.displayError(response.body.errors);
          } else {
            this.displayError(response.body.success);
          }
          console.log(response);
        }, (response) => {
          this.displayError(response.body);
          });
        },



      displayError(error) {
        var snackbarContainer = document.querySelector('#demo-snackbar-example');

        var message = "";
          $.each(error, function(key,value){
          message += "" + value[0] + "\n";
        })

        var data = {
          message: message,
          timeout: 5000,
        };
          snackbarContainer.MaterialSnackbar.showSnackbar(data);

        }
    },
    components: {
      'userForm': userForm
    }
  }

</script>