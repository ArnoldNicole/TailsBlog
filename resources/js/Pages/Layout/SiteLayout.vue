<script setup>
import FooterComponent from '@/Pages/Layout/FooterComponent.vue';
import NavbarComponent from '@/Pages/Layout/NavbarComponent.vue';

defineProps({
    appName: String,
    appSlogan: String
})
</script>

<template>

    <!-- Section 1 -->
    <NavbarComponent :appName="appName" />

    <!-- Section 2 -->
    <main>
        <slot />
    </main>
    <!-- Footer-->
    <FooterComponent :appName="appName" :appSlogan="appSlogan" />

</template>