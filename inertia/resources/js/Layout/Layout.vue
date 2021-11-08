<template>
  <main>
    <app-head :title="title" />
    <header>
      <Link href="/">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/contact">Contact</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import AppHead from '@/Common/AppHead';

export default {
  components: {
    AppHead,
    Link,
  },
  props: {
    title: {
      type: String,
      default: null,
    }
  },
};
</script>
