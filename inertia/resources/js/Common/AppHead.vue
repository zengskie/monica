<template>
  <Head :title="title ? $t('app.application_title_dynamic', {title: title}) : $t('app.application_title')">
    <slot />
  </Head>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';

export default {
  components: {
    Head,
  },
  props: {
    title: {
      type: String,
      default: null,
    }
  },
};
</script>
