<style></style>

<template>
      <div class="notification animated fadeIn" v-bind:class="type" v-if="show">
        <button class="delete" @click="hideModal"></button>
        {{message}}
      </div>
</template>


<script>
  export default {
    data() {
      return {
        type: 'is-info',
        message: '',
        show: false
      };
    },

    mounted() {
        Event.$on('displayAlert', ((response) => {
          console.log("event received");
          this.show = response.show;
          this.message = response.message;
          this.type = response.type;
        }));
    },

    methods: {
      hideModal(event) {
        var _parent = event.target.parentNode;
        _parent.classList.remove("fadeIn");
        _parent.classList.add("fadeOut")
        clearTimeout(1000);
        this.show = false;
      }
    }
  }
</script>