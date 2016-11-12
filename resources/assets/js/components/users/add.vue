<style></style>

<template>
    <div class="mdl-grid demo-content">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

  <main class="mdl-layout__content">

    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <h4>Form Prototype</h4>
      </div>
    </div>


    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <form action="#" >
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--3-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input v-model="name" class="mdl-textfield__input" type="text" id="name" />
                <label class="mdl-textfield__label" for="text">Name</label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input  v-model="email" class="mdl-textfield__input" type="email" name="email" id="email"  />
                <label class="mdl-textfield__label" for="email">Email</label>
              </div>
            </div>
          </div>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--3-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input  v-model="password" class="mdl-textfield__input" type="password" name="password" id="password" />
                <label class="mdl-textfield__label" for="password">Password</label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col">

            </div>
          </div>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <div class="mdl-textfield mdl-js-textfield">
                <select  v-model="role_id" name="role_id" id="role">
                    <option v-for="role in roles" :value="role.id">{{role.name}}</option>
                </select>

              </div>
            </div>
          </div>

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
    export default {
        created: function() {
            var vm = this;
        },

        data: function () {
            return {
                name: '',
                password: '',
                email: '',
                role_id: '1',
                roles: []
            };
        },

        created: function() {
            var vm = this;
            this.getRoles();
        },

        methods: {
            addUser: function() {
                var vm = this;
                var data = {
                    email: this.email,
                    name: this.name,
                    password: this.password,
                    role_id: this.role_id
                };

                this.$http.post('/api/users', data).then((response) => {
                    console.log(response);
                }, (response) => {
                    this.displayError(response.body);
                });
            },

            getRoles() {
                this.$http.get('/api/roles').then((response) => {
                this.roles = response.body;
              }, (response) => {
                console.log(response);
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
        }
    }

</script>