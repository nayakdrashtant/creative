<template>
    <profile :data="data" v-if="typeof data === 'object' &&  Object.keys(data).length > 0" />
    <div v-else class="bg-red-500 mt-24 text-white font-bold text-center border rounded-xl px-2 py-10">
        <p>Oops, something went wrong!!!</p>
    </div>
</template>
<script>
import Profile from "@/components/Profile";
export default {
    components:{
        Profile
    },
    data() {
        return {
            data: ""
        }
    },
    created() {
        this.profile();
    },
    methods: {
        profile() {
            axios.get('/api/profile/1').then(res => {
                this.data = res.data;
            }).catch(error => {
                alert('Ops, something went wrong!!!');
                console.log(error);
            })
        }
    }
}
</script>
