<script setup>
import FooterComponent from '@/Pages/Layout/FooterComponent.vue';
import NavbarComponent from '@/Pages/Layout/NavbarComponent.vue';

defineProps({
    appName: String,
    appSlogan: String,
    Categories: Array
})
</script>

<template>

    <!-- Section 1 -->
    <NavbarComponent :appName="appName" :Categories="Categories" />
    <!-- Section 2 -->
    <main>
        <slot />
    </main>
    <!-- Footer-->
    <FooterComponent :appName="appName" :appSlogan="appSlogan" :Categories="Categories" />

</template>