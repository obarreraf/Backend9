<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
</script>
<template>
    <AppLayout title="Permissions">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Permisos
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                     <table>
                        <tr v-for="permission in permissions.data" :key="permission.id">
                            <td>{{ permission.name }}</td>
                        </tr>
                    </table>
                </div>
                <pagination :links="permissions.links" />
            </div>
        </div>
    </AppLayout>
</template>

<script>
import Pagination from '@/Components/Pagination';

export default {
  components: {
    Pagination,
  },
  props: {
    permissions: Object,
  },
}
</script>
