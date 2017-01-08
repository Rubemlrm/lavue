export default class Users {

    constructor() {
        this.users = {};
    }

    find(field) {
        return this.users.hasOwnProperty(field);
    }

    show(field) {
        if(this.users[field]) {
            return this.users[field][0];
        }
    }

    store(users)
    {
        this.users = users;
    }

    destroy()
    {
        this.users = {};
    }
}