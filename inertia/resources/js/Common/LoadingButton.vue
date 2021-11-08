<style lang="scss" scoped>
button {
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
}

.icon {
  top: -1px;
}
</style>

<template>
  <div class="di">
    <button :class="classes" class="rounded px-2 py-1 relative" name="save" type="submit">
      <ball-pulse-loader v-if="state == 'loading'" color="#fff" size="7px" />
      <svg v-if="icon === 'plus'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline relative icon" fill="none" viewBox="0 0 24 24"
           stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
      </svg>
      <span v-if="state != 'loading'">
        {{ text }}
      </span>
    </button>
  </div>
</template>

<script>
import 'vue-loaders/dist/vue-loaders.css';
import BallPulseLoader from 'vue-loaders/dist/loaders/ball-pulse';

export default {
  components: {
    BallPulseLoader,
  },

  props: {
    text: {
      type: String,
      default: '',
    },
    icon: {
      type: String,
      default: '',
    },
    state: {
      type: String,
      default: '',
    },
    classes: {
      type: String,
      default: '',
    },
  }
};
</script>
