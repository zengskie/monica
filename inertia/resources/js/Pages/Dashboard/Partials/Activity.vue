<style lang="scss" scoped>
.icon-date {
  top: -2px;
}
</style>

<template>
  <div class="relative bg-white border-gray-200 border sm:rounded-lg mb-7">
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
        <div class="inline mr-3 relative">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline relative icon-date" fill="none" viewBox="0 0 24 24"
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
</template>

<script>

export default {
};
</script>
