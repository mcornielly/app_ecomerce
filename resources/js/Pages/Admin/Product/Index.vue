<template>
    <AdminLayout>
        <ListProducts/>
    </AdminLayout>
</template>

<script setup>
import { onMounted } from 'vue'
import AdminLayout from '../Components/AdminLayout.vue';
import ListProducts from './ListProducts.vue';
import { initFlowbite } from 'flowbite'

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})

</script>
