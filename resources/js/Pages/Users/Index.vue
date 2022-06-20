<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination';
import { Link } from '@inertiajs/inertia-vue3';
</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <inertia-link :href="route('users.create')" class="bg-blue-500 hover:bg-blue-700 rounded-md text-white font-bold py-2 px-4 my-2">Crear Nuevo Usuario</inertia-link>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="p-3">ID</th>
                                    <th class="p-3">Nombre</th>
                                    <th class="p-3">Email</th>
                                    <th class="p-3">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users.data" :key="user.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                                    <td class="p-3 border-t">{{ user.id }}</td>
                                    <td class="p-3 border-t">{{ user.name }}</td>
                                    <td class="p-3 border-t">{{ user.email }}</td>
                                    <td class="p-3 border-t">
                                        <inertia-link :href="route('users.show', user.id)" class="bg-blue-500 hover:bg-blue-700 rounded-md text-white font-bold py-2 px-4 my-2">Ver Detalle</inertia-link>
                                        <inertia-link :href="route('users.edit', user.id)" class="bg-blue-500 hover:bg-blue-700 rounded-md text-white font-bold py-2 px-4 my-2">Editar</inertia-link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <pagination class="mt-6" :links="users.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>

export default {
  components: {
    Pagination,
    Link,
  },
  props: {
    users : Object
  }

}
</script>