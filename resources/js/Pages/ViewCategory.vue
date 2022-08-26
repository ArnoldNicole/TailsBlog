<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import FooterComponent from '@/Pages/Layout/FooterComponent.vue';
import NavbarComponent from '@/Pages/Layout/NavbarComponent.vue';
import SiteLayout from "@/Pages/Layout/SiteLayout.vue"
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    appName: String,
    appSlogan: String,
    Categories: Array,
    Category: Object,
    Articles: Object
})
</script>

<template>
    <SiteLayout :appName="appName" :appSlogan="appSlogan" :Categories="Categories">
        <!-- Section 2 -->

        <section class="px-2 py-32 bg-white md:px-0">
            <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap items-center sm:-mx-3">
                    <div class="w-full md:w-1/2 md:px-3">
                        <div
                            class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                            <h1
                                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                                <span class="block xl:inline">{{ Category.headline }}</span>
                                <span class="block text-indigo-600 xl:inline">{{ Category.sub_headline }}</span>
                            </h1>
                            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                                {{ Category.tagline }}</p>
                            <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                                <a href="#all_articles"
                                    class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                                    All articles
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                            <img :src="`/storage/categoryImages/${Category.image}`" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 3 -->
        <section class="bg-white" id="all_articles">
            <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

                <!-- <div class="flex flex-col items-center sm:px-5 md:flex-row">
                    <div class="w-full md:w-1/2">
                        <a href="#_" class="block">
                            <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                                src="https://cdn.devdojo.com/images/may2021/cupcakes.jpg">
                        </a>
                    </div>
                    <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                        <div
                            class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                            <div
                                class="bg-pink-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                                <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span>Featured</span>
                            </div>
                            <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="#_">Savory
                                    Templates. Sweet Designs.</a></h1>
                            <p class="pt-2 text-sm font-medium">by <a href="#_" class="mr-1 underline">John Doe</a> ·
                                <span class="mx-1">April 23rd, 2021</span> · <span class="mx-1 text-gray-600">5 min.
                                    read</span>
                            </p>
                        </div>
                    </div>
                </div> -->

                <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4"
                        v-for="article, a in Articles.data" :key="a">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                :src="`/storage/coverImages/${article.cover_image}`">
                        </a>
                        <div :style="`background-color: ${Category.color};`"
                            class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>{{ Category.name }}</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="#_">{{ article.title }}</a>
                        </h2>
                        <p class="text-sm text-gray-500">{{ article.catch_line }}</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mary Jane</a> · <span
                                class="mx-1">{{ article.created_at }}</span> · <span class="mx-1 text-gray-600">3 min.
                                read</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="py-20 bg-white">
            <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl xl:text-6xl">
                    The New Standard for Design
                </h2>
                <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Use our award-winning tools to help you maximize your profits. We've uncovered the correct recipe
                    for
                    converting visitors into customers.
                </p>
                <div class="flex justify-center mt-8 space-x-3">
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-700">Sign
                        Up Today</a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200">Learn
                        more</a>
                </div>
            </div>
        </section>


    </SiteLayout>


</template>