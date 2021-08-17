<template>
  <layout>
    <h1 class="text-3xl font-bold">
      {{ list.name }}
      <small class="text-gray-500"
        >Last updated
        <time :datetime="list.updated_at"
          >{{ formatDistance(new Date(list.updated_at), new Date()) }} ago</time
        ></small
      >
    </h1>

    <p v-if="list.description" class="mt-4 max-w-prose">
      {{ list.description }}
    </p>

    <div>
      <div v-if="list.ideas">
        <a
          v-for="idea in list.ideas"
          :key="idea.id"
          :href="idea.url"
          class="block mt-8"
          target="_blank"
          rel="noopener nofollow"
        >
          <span
            class="text-sm font-bold tracking-wider text-gray-600 uppercase"
            v-if="idea.brand"
            >{{ idea.brand }}</span
          >
          <h2 class="text-xl font-bold">
            {{ idea.name }}

            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="inline w-5 h-5 -mt-1"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
              />
            </svg>
          </h2>

          <div>
            Added
            <time datetime="{{ idea.created_at }}">{{
              formatDistance(new Date(idea.created_at), new Date())
            }}</time> ago
          </div>

          <div v-if="idea.price">${{ priceInDollars(idea.price) }}</div>

          <p v-if="idea.description">{{ idea.description }}</p>
        </a>
      </div>

      <p class="mt-4 max-w-prose" v-else>
        No items have been added to this list yet.
      </p>
    </div>
  </layout>
</template>

<script>
import { formatDistance } from "date-fns";
import layout from "../../Components/Layout.vue";

export default {
  components: {
    layout,
  },

  props: {
    list: Object,
  },

  setup() {
    const priceInDollars = (price) => {
      return (price / 100).toFixed(2);
    };

    return {
      formatDistance,
      priceInDollars,
    };
  },
};
</script>
