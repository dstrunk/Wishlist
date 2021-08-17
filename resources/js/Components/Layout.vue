<template>
  <header />
  <div class="container px-4 mx-auto mt-16 sm:px-6 lg:px-8">
    <slot />
  </div>
  <footer />
</template>

<script>
import header from "./Header.vue";
import footer from "./Footer.vue";

export default {
  components: {
    header,
    footer,
  },
};
</script>
