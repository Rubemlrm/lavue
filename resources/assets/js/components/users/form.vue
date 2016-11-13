<template>

<div>
      <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--3-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input v-model="user.name" class="mdl-textfield__input" type="text" id="name" />
                <label class="mdl-textfield__label" for="name">Name</label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input  v-model="user.email" class="mdl-textfield__input" type="email" name="email" id="email"  />
                <label class="mdl-textfield__label" for="email">Email</label>
              </div>
            </div>
          </div>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--3-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input  v-model="user.password" class="mdl-textfield__input" type="password" name="password" id="password" />
                <label class="mdl-textfield__label" for="password">Password</label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input v-model="user.password2" class="mdl-textfield__input" type="password" name="password2" id="password" />
                <label class="mdl-textfield__label" for="password2">Password</label>
              </div>
            </div>
          </div>

          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <div class="mdl-textfield mdl-js-textfield">
                <select  v-model="user.role_id" name="role_id" id="role">
                    <option v-for="role in roles" :value="role.id">{{role.name}}</option>
                </select>

              </div>
            </div>
          </div>
    </div>
</template>

<script>
export default {
  props: ['user'],

  created() {
    var vm = this;
    this.getRoles();
  },

  data() {
        return {
          roles: []
        }
      },

  methods: {
    getRoles() {
      this.$http.get('/api/roles').then((response) => {
        this.roles = response.body;
      }, (response) => {
        console.log(response);
      });
    },
  }
}
</script>