<template>
    <!-- profile detail view -->
    <div class="bg-white p-5 rounded">
        <section class="bg-white overflow-hidden">
            <div class="relative px-6 py-4">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-1">
                    <div class="" v-if="data.profile_picture">
                        <img class="h-36 w-fit rounded-full mx-auto" :src="'/'+data.profile_picture" alt="">
                    </div>
                    <div class="md:col-span-2 p-4">
                        <h1 class="text-2xl font-bold mb-2" v-if="data.name" v-text="data.name"></h1>
                        <div v-if="data.bio">
                            <h2 class="text-gray-500 text-base font-bold">Bio</h2>
                            <p class="text-xs text-gray-500" v-text="data.bio"></p>
                        </div>
                    </div>
                    <div class="md:col-span-2 p-4">
                        <div v-if="data.phone">
                            <h3 class="text-base font-bold text-gray-500">Phone</h3>
                            <a :href="'tel:+1'+data.phone" class="text-rose-500" v-text="data.phone"></a>
                        </div>
                        <div v-if="data.email">
                            <h3 class="text-base font-bold text-gray-500">Email</h3>
                            <a :href="'mailto:'+data.email" class="text-rose-500" v-text="data.email"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- album section -->
    <div class="mx-4">
        <ul v-if="typeof data.album === 'object' && Object.keys(data.album).length > 0" role="list"
            class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3">
            <li class="col-span-1" v-for="(item,index) in data.album" :key="index">
                <Album :item="item"/>
            </li>
        </ul>
        <div v-else class="mx-auto mt-5 bg-red-500 w-full p-3 text-white rounded border font-bold">
            <p>No albums available for now</p>
        </div>
    </div>
</template>
<script>
import Album from "@/components/Album";

export default {
    components: {
        Album
    },
    props: {
        data: Object
    }
}
</script>
