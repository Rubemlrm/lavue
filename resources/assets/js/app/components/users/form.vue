<template>
  <div class="block">
    <div class="control is-horizontal">
    <div class="control is-grouped">
    <div class="control is-expanded">
      <label for="name">Name</label>
      <input type="text" class="input" id="name"
        placeholder="Enter name"  v-model="user.name">
      <span class="help is-danger" v-if="errors.name" v-text="errors.name[0]"></span>
    </div>

    <div class="control is-expanded">
      <label for="email">Email address</label>
      <input type="email" class="input" id="email"
        placeholder="Enter email" v-model="user.email" >
      <span class="help is-danger" v-if="errors.email" v-text="errors.email[0]"></span>
    </div>
    </div>
  </div>

  <div class="control is-horizontal">
    <div class="control is-grouped">
      <div class="control is-expanded">
        <label for="password">Password</label>
        <input type="password" class="input" id="password"
          placeholder="Enter password" v-model="user.password">
        <span class="help is-danger" v-if="errors.password" v-text="errors.password[0]"></span>
      </div>
      <div class="control is-expanded">
        <label for="password2">Confirm password</label>
        <input type="password" class="input" id="password2"
          placeholder="confirm password" v-model="user.password2">
        <span class="help is-danger" v-if="errors.password2" v-text="errors.password2[0]"></span>
      </div>
    </div>
  </div>

    <label for="password2">Role</label>
    <p class="control">

      <span class="select">
      <select  v-model="user.role_id" name="role_id" id="role"
        class="input">
        <option v-for="role in roles" :value="role.id">{{role.name}}</option>
      </select>
      </span>
    </p>
  </div>
</template>

<script>
  export default {
    props: ['user','errors'],

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