<script setup>
import FooterComponent from '@/Pages/Layout/FooterComponent.vue';
import NavbarComponent from '@/Pages/Layout/NavbarComponent.vue';
</script>

<template>

    <!-- Section 1 -->
    <NavbarComponent />

    <!-- Section 2 -->
    <main>
        <slot />
    </main>
    <!-- Footer-->
    <FooterComponent />

</template>