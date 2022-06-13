<template>
    <AppLayout title="Permissions">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Permissions
            </h2>
        </template>

        <Bcklrvl>
            <template #col>
                <th class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">ID</th>
                <th class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">Nombre</th>
                <th class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">Guardian</th>
            </template>
            <template #row>
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100" v-for="p in permissions" :key="p.id">
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ p.id }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ p.name }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ p.guard_name }}</td>
                </tr>
            </template>
        </Bcklrvl>
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
