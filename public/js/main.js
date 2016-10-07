Vue.component('roles',{
    template: '#roles-template',

    data: function() {
        return {
            list: []
        };
    },

    created: function(){
        $.getJSON('api/roles', function(data){
            console.log(data);
            this.list = data;
        }.bind(this));
    }
});


new Vue({
    el: '.listRoles',
})