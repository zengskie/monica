<template>
  <Layout title="Home">
    <div class="mt-24 relative flex w-full h-screen">
      <div class="absolute -translate-x-full lg:relative flex flex-none flex-col lg:translate-x-0 w-3/4 sm:w-1/2 md:w-1/3 lg:w-56 2xl:w-72 3xl:w-80 z-30 lg:z-auto max-h-screen h-full h-screen overflow-y-auto transition duration-200 ease-in-out transform bg-white border-r pb-10 sm:pb-0 border-gray-150 dark:bg-gray-900 dark:border-gray-800">
        <div class="sticky top-0 z-10 flex items-center justify-between flex-none px-3 py-2 dark:bg-gray-900 dark:bg-opacity-80 bg-white h-14 bg-opacity-90 filter-blur dark:border-b dark:border-gray-900">
          Search
        </div>
        <ul>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Lorraine Del Giaccosldkfjalsdjkfs</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Lorraine Del Giaccosldkfjalsdjkfs</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Alexis Saettler</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Regis Freyd</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Henri Troyat</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Joe Biden</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Alexis Saettler</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Regis Freyd</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Henri Troyat</a>
          </li>
          <li class="p-3 flex text-sm items-center border-b border-gray-150">
            <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
            <a class="" href="">Joe Biden</a>
          </li>
        </ul>
      </div>

      <div class="flex flex-1">
        <div class="flex w-full">
          <div class="bg-dots hidden md:flex">
            <div class="relative flex-none w-full h-full max-h-screen overflow-y-auto bg-white border-r border-gray-150 md:w-80 xl:w-96 dark:bg-gray-900 dark:border-gray-800">
              middle
            </div>
          </div>

          <div class="relative flex flex-col w-full max-h-screen overflow-y-auto bg-white dark:bg-black">
            right
          </div>
        </div>
      </div>
    </div>
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
