<template>

    <!-- Navbar Start -->
    <Navbar />
    <!-- End -->

    <!-- Side Start -->
    <Sidebar/>
    <!-- End -->
    <div class="p-4 md:ml-64 h-auto pt-20">
        <slot/>
    </div>
</template>

    <script setup>
    import { onMounted } from 'vue'
    import Navbar from './Navbar.vue';
    import Sidebar from './Sidebar.vue';
    import { initFlowbite } from 'flowbite'

    // initialize components based on data attribute selectors
    onMounted(() => {
        initFlowbite();
    })

    </script>
