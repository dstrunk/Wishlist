<template>
  <layout>
    <div v-if="lists.length">
      <ul v-for="list in lists" :key="list.id">
        <li>
          <a :href="route('wishlists.show', list.id)">{{ list.name }}</a>
        </li>
      </ul>
    </div>
    <p v-else>No lists at this time.</p>
  </layout>
</template>

<script>
import layout from "../../Components/Layout.vue";

export default {
  components: {
    layout,
  },

  props: {
    lists: Array,
  },

  setup(props) {
    return {};
  },
};
</script>
