<script setup>
import { Link } from '@inertiajs/inertia-vue3';

import AppLayout from '@/Layouts/AppLayout.vue';

import InputError from '@/Jetstream/InputError.vue';

</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crear Nuevo Usuario
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div class="block mt-4">
                                <label for="name"  class="block font-medium text-sm text-gray-700 my-2">Nombre:</label>
                                <input type="text" id="name" v-model="form.name" class="form-input w-full rounded-md shadow-sm"/>
                                <input-error :message="errors.name"></input-error>
                            </div>    
                            <div class="block mt-4">
                                <label for="email"  class="block font-medium text-sm text-gray-700 my-2">Email:</label>
                                <input type="text" id="email" v-model="form.email" class="form-input w-full rounded-md shadow-sm"/>
                                <input-error :message="errors.email"></input-error>                                
                            </div>
                            <div class="block mt-4">   
                                <label for="password"  class="block font-medium text-sm text-gray-700 my-2">Contraseña:</label>
                                <input type="password" id="password" v-model="form.password" class="form-input w-full rounded-md shadow-sm"/>
                                <input-error :message="errors.password"></input-error>
                            </div>
                            <div class="block mt-4">
                                <label for="password_confirmation" class="block font-medium text-sm text-gray-700 my-2">Confirme Contraseña:</label>
                                <input type="password" id="password_confirmation " v-model="form.password_confirmation" class="form-input w-full rounded-md shadow-sm"/>
                            </div>
                            <div class="block mt-4">
                                <button class="bg-blue-500 hover:bg-blue-700 rounded-md text-white font-bold py-2 px-4 my-2"  @click="submit">
                                    Guardar
                                </button>
                                <inertia-link :href="route('users.index')" class="bg-red-500 hover:bg-blue-700 rounded-md text-white font-bold py-2 px-4 my-2">
                                    Volver
                                </inertia-link>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>

export default {
    props: {
        errors: Object,
    },
    components: {
        AppLayout,
        Link,
        InputError,
    },
    data (){
        return {
            form:{
                name:'',
                email:'',
                password: '',
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post(this.route('users.store'), this.form)
        }
    }
}
</script>