<template>
  <Layout :title="'Welcome'">
    <H1>Welcome</H1>
    <p>Hello {{ user.first_name + ' ' + user.last_name }}, welcome to your first Inertia app!</p>
  </Layout>
</template>

<script>
import Layout from '@/Layout/Layout';

export default {
  components: {
    Layout,
  },
  props: {
    user: {
      type: Object,
      default: null,
    }
  },
};
</script>
