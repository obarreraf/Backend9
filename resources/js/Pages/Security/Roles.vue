<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>
<template>
    <AppLayout title="Roles">
        <template #header>
            <div class="grid grid-cols-1 md:grid-cols-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Módulo de Roles
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-6">
                <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..." v-model="q">
            </div>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table>
                        <tr v-for="role in roles"  :key="role.id">
                            <td class="border px-4 py-2">
                                {{ role.name }}
                            </td>
                            <td class="px-4 py-2">
                                <inertia-link :href="route('roles.index', role.id)">
                                Ver
                                </inertia-link>
                            </td>
                            <td class="px-4 py-2">
                                <inertia-link :href="route('roles.index', role.id)">
                                Editar
                                </inertia-link>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    components: {

    },
    props:{
        roles: Array,
    },
    data() {
        return{
            q: ''
        }
    },
    watch: {
        q: function (value) {
            this.$inertia.replace(this.route('roles.index', {q: value}))
        }
    }
}
</script>


