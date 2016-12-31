<style>
</style>
<template>
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
        <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Username
                </th>
                <th>
                    Email
                </th>
                <th>
                    Role
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users">
                <td>
                    {{user.id}}
                </td>
                <td>
                    {{user.name}}
                </td>
                <td>
                    {{user.email}}
                </td>
                <td>
                    {{user.role_id}}
                </td>
                <td class="text-center">
                    <router-link to="/users/edit">
                        <span class="glyphicon glyphicon-edit">
                        </span>
                        Edit
                    </router-link>
                    <a class="btn btn-danger btn-xs" href="#">
                        <span class="glyphicon glyphicon-remove">
                        </span>
                        Del
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
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