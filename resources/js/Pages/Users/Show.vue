<script setup>
import { Link } from '@inertiajs/inertia-vue3';

import AppLayout from '@/Layouts/AppLayout.vue';

</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Detalle de Usuario: 
            </h2>
        </template>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="block mt-4">
                            <label for="name"  class="block font-bold text-sm text-gray-700 my-2">Nombre:</label>
                            <p class="block font-medium text-sm text-gray-700 my-2">{{ admuser.name}}</p> 
                        </div>     
                        <div class="block mt-4">
                            <label for="email" class="block font-bold text-sm text-gray-700 my-2">Email:</label> 
                            <p class="block font-medium text-sm text-gray-700 my-2">{{ admuser.email}}</p> 
                        </div>
                        <div class="block mt-4">
                            <inertia-link :href="route('users.index')" class="bg-red-500 hover:bg-blue-700 rounded-md text-white font-bold py-2 px-4 my-2">
                                Volver
                            </inertia-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>

export default {
    props:{
        admuser: Object,
    },
    components: {
        AppLayout,
        Link,
    }
}
</script>