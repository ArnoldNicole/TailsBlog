<script setup>
import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    appName: String,
    Categories: Array,
})
</script>
<template>
    <section class="w-full px-8 text-gray-700 bg-white fixed-top">
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <div class="relative flex flex-col md:flex-row">
                <a href="#_"
                    class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                    <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">{{ appName }}<span
                            class="text-indigo-600">.</span></span>
                </a>
                <nav
                    class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                    <Link :href="route('index')" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">
                    Home</Link>
                    <Link v-for="category, c in Categories" :key="c" :href="route('category', category.name)"
                        class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">
                    {{ category.name }}</Link>
                </nav>
            </div>

            <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
                <Link :href="route('blog')"
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                Blog
                </Link>
            </div>
        </div>
    </section>
</template>