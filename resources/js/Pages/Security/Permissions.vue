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
                    <BackTable>
                        <template #col>
                            <th class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">ID</th>
                            <th class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">Nombre</th>
                        </template>
                        <template #row>
                            <tr v-for="p in permissions.data" :key="p.id" class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ p.id }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ p.name }}</td>
                            </tr>
                        </template>
                    </BackTable>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Welcome from '@/Jetstream/Welcome.vue';
    const props = defineProps({
        permissions: Object
    })
    const permissions = props.permissions
</script>
