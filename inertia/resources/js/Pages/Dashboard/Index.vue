<style lang="scss" scoped>
.grid {
  grid-template-columns: 200px 1fr 200px;
}

@media (max-width: 480px) {
  .grid {
    grid-template-columns: 1fr;
  }
}

.icon-sidebar {
  color: #737e8d;
  top: -2px;
}

input[type=checkbox] {
  top: 3px;
  width: 12px;
}
</style>

<template>
  <Layout title="Home">
    <main class="sm:mt-24 relative">
      <div class="max-w-8xl mx-auto py-2 sm:py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
          <!-- left -->
          <div class="p-3 sm:p-0">
            <h3 class="font-medium border-b border-gray-200 mb-3">
              <span class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-sidebar h-4 w-4 inline relative" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
              </span>
              Favorites
            </h3>
            <div class="flex text-sm items-center mb-2">
              <img class="rounded-full mr-2" src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt="" />
              <a class="colored-link" href="">Lorraine Del Giaccosldkfjalsdjkfs</a>
            </div>
            <div class="flex text-sm items-center mb-2">
              <img class="rounded-full mr-2"
                   src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt=""
              />
              <a class="colored-link" href="">Lorraine Del Giacco</a>
            </div>
            <div class="flex text-sm items-center mb-2">
              <img class="rounded-full mr-2"
                   src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt=""
              />
              John Mac Biden
            </div>
          </div>

          <!-- middle -->
          <div class="p-3 sm:p-0">
            <!-- actions -->
            <div style="background-color: #fcfeff;" class="bg-white border border-gray-200 rounded-lg p-3 mb-6">
              <p class="text-center mb-5"><span class="mr-2">👋</span> Good evening, Regis.</p>

              <div class="sm:flex justify-center mb-5">
                <!-- <button type="btn"
                  class="btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                  life event
                </button>
                <button
                  class="btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                  activity
                </button>
                <button
                  class="btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-4 w-4 text-gray-500 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  entry
                </button>
                <button
                  class="btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                  mood
                </button>
                <button
                  class="btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                  communication
                </button> -->
                <loading-button :text="'life event'" :icon="'plus'" :classes="'mr-3'" />
                <loading-button :text="'activity'" :icon="'plus'" :classes="'mr-3'" />
                <loading-button :text="'entry'" :icon="'plus'" :classes="'mr-3'" />
                <loading-button :text="'mood'" :icon="'plus'" :classes="'mr-3'" />
                <loading-button :text="'communication'" :icon="'plus'" :classes="'mr-3'" />
                <loading-button :text="'goal'" :icon="'plus'" />
              </div>
            </div>

            <!-- filters -->
            <div class="mb-3 text-right">
              <button
                class="inline-flex items-center px-2 py-1 border border-gray-300 rounded-md shadow-sm text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                Filters
              </button>
            </div>

            <!-- feed -->
            <div class="mb-10">
              <div class="relative bg-white border-gray-200 border sm:rounded-lg mb-7">
                <span class="absolute text-xs border text-blue-500 bg-blue-50 px-2 py-0 rounded" style="top: -10px; left: 10px;">
                  entry
                </span>
                <div class="p-3 pt-5">
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                    voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                    veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                    eum fugiat quo voluptas nulla pariatur?
                  </p>
                </div>
                <div class="border-t border-gray-200 flex justify-between text-xs text-gray-600 p-2">
                  <div>
                    <div class="inline mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>
                      Sept 21, 2020
                    </div>
                    <div class="inline">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                        />
                      </svg>
                      Published online
                    </div>
                  </div>
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                      />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="relative bg-white border-gray-200 border sm:rounded-lg">
                <span class="absolute text-xs border text-blue-500 bg-blue-50 px-2 py-0 rounded" style="top: -10px; left: 10px;">
                  activity
                </span>
                <div class="p-3 pt-5">
                  <p class="inline">Went to the theater</p>
                </div>
                <div class="border-t border-gray-200 px-3 py-2">
                  <span class="text-sm text-gray-500 mr-3">
                    With
                  </span>
                  <div class="inline text-sm mb-2 mr-2">
                    <img class="inline rounded-full mr-1"
                         src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt=""
                    />
                    <a class="underline" href="">Lorraine Del Giacco</a>
                  </div>
                  <div class="inline text-sm mb-2">
                    <img class="inline rounded-full mr-1"
                         src="https://ucarecdn.com/2f86ee48-9258-4b5c-aaf5-82269edcf770/-/scale_crop/25x25/smart/" alt=""
                    />
                    <a class="underline" href="">Lorraine Del Giacco</a>
                  </div>
                </div>
                <div class="border-t border-gray-200 px-3 py-2 flex">
                  <div class="mr-3">
                    <span class="text-sm text-gray-500 mr-3">
                      At
                    </span>
                    <div class="inline text-sm mb-2 mr-2">
                      Place Dupuis
                    </div>
                  </div>
                  <div>
                    <span class="text-sm text-gray-500 mr-3">
                      Rating
                    </span>
                    <div class="inline text-sm mb-2 mr-2">
                      ★✩✩✩✩
                    </div>
                  </div>
                </div>
                <div class="border-t border-gray-200 flex justify-between text-xs text-gray-600 p-2">
                  <div>
                    <div class="inline mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor"
                      >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>
                      Sept 12, 2020
                    </div>
                  </div>
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <!-- archives -->
            <div>
              <p class="text-xs">Browse past entries</p>
              <ul>
                <li class="inline mr-2 text-sm"><a class="underline" href="">2021</a> <span class="text-gray-500 text-xs">(3)</span></li>
                <li class="inline mr-2 text-sm"><a class="underline" href="">2020</a> <span class="text-gray-500 text-xs">(139)</span></li>
                <li class="inline mr-2 text-sm"><a class="underline" href="">2019</a> <span class="text-gray-500 text-xs">(23)</span></li>
              </ul>
            </div>
          </div>

          <!-- right -->
          <div class="p-3 sm:p-0">
            <div class="mb-10">
              <h3 class="font-medium mb-3 border-b border-gray-200">
                <span class="relative">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon-sidebar h-4 w-4 inline relative" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                </span>
                Reminders
              </h3>
              <p class="text-xs text-gray-400">Nov 09</p>
              <p class="mb-3 text-sm">Birthday John</p>
              <p class="text-xs text-gray-400">Nov 13</p>
              <p class="mb-3 text-sm">Wedding Henri</p>
            </div>
            <h3 class="font-medium mb-3 border-b border-gray-200">
              <span class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-sidebar h-4 w-4 inline relative" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
              </span>
              Tasks
            </h3>
            <div class="flex items-start mb-3 relative">
              <input id="remember-me" name="remember-me" type="checkbox" class="relative h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
              <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                Remember mea sdfasdf asdf asdf asdf sdf
              </label>
            </div>
            <div class="flex items-start">
              <input id="remember-me" name="remember-me" type="checkbox" class="relative h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
              <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                Remember me
              </label>
            </div>
          </div>
        </div>
      </div>
    </main>
  </Layout>
</template>

<script>
import Layout from '@/Layout/Layout';
import LoadingButton from '@/Common/LoadingButton';

export default {
  components: {
    Layout,
    LoadingButton,
  },
  props: {
    user: {
      type: Object,
      default: null,
    }
  },
};
</script>
