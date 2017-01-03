<style></style>

<template>
  <div class="columns">
    <sidebar></sidebar>
    <div class="column is-10">
        <navbar></navbar>
        <nav class="level app-levelbar"><div class="level-left"><div class="level-item"><h3 class="subtitle is-5"><strong>BreadCrumbs</strong></h3></div></div></nav>
        <section class="section">
            <router-view></router-view>
        </section>
    </div>
</div>

</template>

<script>

export default {

}
</script>