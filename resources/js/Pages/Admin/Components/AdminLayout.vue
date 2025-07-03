<template>

    <!-- Navbar Start -->
    <Navbar />
    <!-- End -->

    <!-- Side Start -->
    <Sidebar/>
    <!-- End -->

    <slot/>

    </template>

    <script setup>
    import { onMounted } from 'vue'
    import Navbar from './Navbar.vue';
    import Sidebar from './Sidebar.vue';
    import { initFlowbite, initDatepickers } from 'flowbite'

    // initialize components based on data attribute selectors
    onMounted(() => {
        initFlowbite();
        initDatepickers();
    })

    </script>
