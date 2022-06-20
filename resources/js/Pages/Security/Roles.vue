<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import { Link } from '@inertiajs/inertia-vue3'
</script>
<template>
    <AppLayout title="Roles">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de Roles
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table class="w-full whitespace-nowrap">
                        <tr class="text-left font-bold">
                        <th class="pb-4 pt-6 px-6">ID</th>
                        <th class="pb-4 pt-6 px-6">Nombre</th>
                        <th class="pb-4 pt-6 px-6">Ver Permisos</th>
                        </tr>
                        <tr v-for="role in roles.data" :key="role.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                            <td class="border-t">
                                <Link class="flex items-center px-6 py-4"  tabindex="-1">
                                    {{ role.id }}
                                </Link>
                            </td>
                            <td class="border-t">
                                <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/roles/${role.id}/show`">
                                {{ role.name }}
                                </Link>
                            </td>
                            <td class="border-t">
                                <inertia-link :href="route('roles.show', role.id)" class="bg-blue-500 hover:bg-blue-700 rounded-md text-white font-bold py-2 px-4 my-2">Ver Detalle</inertia-link>
                            </td>
                        </tr>
                        <tr v-if="roles.data.length === 0">
                            <td class="px-6 py-4 border-t" colspan="4">No contacts found.</td>
                        </tr>
                    </table>
                </div>
                <pagination class="mt-6" :links="roles.links" />
            </div>
        </div>
    </AppLayout>
</template>

<script>
import Pagination from '@/Components/Pagination';
import Modal from '@/Jetstream/Modal.vue';

export default {
  components: {
    Pagination,
     Link,
  },
  props: {
    roles: Object,
  },
}
</script>


