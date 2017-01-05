export default class Errors {

    constructor() {
        this.errors = {};
    }

    find(field) {
        return this.errors.hasOwnProperty(field);
    }

    show(field) {
        if(this.errors[field]) {
            return this.errors[field][0];
        }
    }

    store(errors)
    {
        this.errors = errors;
    }

    destroy()
    {
        this.errors = {};
    }
}