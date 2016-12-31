<template>
  <div>
    <div class="control is-grouped">
    <div v-bind:class="{ form: 'control'}">
      <label for="name">Name</label>
      <input type="text" class="input is-expanded" id="name"
        placeholder="Enter name"  v-model="user.name">
      <span class="help-block"></span>
    </div>

    <div class="control">
      <label for="email">Email address</label>
      <input type="email" class="input is-expanded" id="email"
        placeholder="Enter email" v-model="user.email">
      <span class="help-block"></span>
    </div>
    </div>


    <div class="control">
      <label for="password">Password</label>
      <input type="password" class="input" id="password"
        placeholder="Enter password" v-model="user.password">
      <span class="help-block"></span>
    </div>
    <div class="control">
      <label for="password2">Confirm password</label>
      <input type="password" class="input" id="password2"
        placeholder="confirm password" v-model="user.password2">
      <span class="help-block"></span>
    </div>
    <div class="control">
      <label for="password2">Role</label>
      <span class="select">
      <select  v-model="user.role_id" name="role_id" id="role"
        class="input">
        <option v-for="role in roles" :value="role.id">{{role.name}}</option>
      </select>
      </span>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['user', 'errors'],

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