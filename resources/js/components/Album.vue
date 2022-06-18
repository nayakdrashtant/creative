<template>
    <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="w-full flex items-center justify-between">
            <div class="relative w-full h-40 rounded-t flex flex-col overflow-hidden">
                    <span aria-hidden="true" class="absolute inset-0">
                      <img :src="'/'+item.img" :alt="item.title"
                           class="w-full h-full object-center object-cover">
                    </span>
                <span aria-hidden="true"
                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                <span class="relative mt-auto p-2 text-xl font-bold text-white" v-text="item.title"></span>
            </div>
        </div>
        <div class="px-4 py-2 text-justify">
            <div>
                <p class="text-base text-gray-500 leading-5" v-text="item.description">
                </p>
            </div>
            <div class="py-2 flex justify-between">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6 text-red-400" viewBox="0 0 20 20"
                         fill="currentColor" v-if="item.featured">
                        <path fill-rule="evenodd"
                              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="text-base text-gray-500" v-text="item.date">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        item: Object
    }
}
</script>
