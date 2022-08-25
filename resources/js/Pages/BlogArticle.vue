<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import FooterComponent from '@/Pages/Layout/FooterComponent.vue';
import NavbarComponent from '@/Pages/Layout/NavbarComponent.vue';
import SiteLayout from "@/Pages/Layout/SiteLayout.vue"
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    appName: String,
    appSlogan: String
})
</script>

<template>
    <SiteLayout :appName="appName" :appSlogan="appSlogan">
        <!-- Section 1 -->
        <section class="px-2 py-32 bg-white md:px-0">
            <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap items-center sm:-mx-3">
                    <div class="w-full md:w-1/2 md:px-3">
                        <div
                            class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                            <h1
                                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                                <span class="block xl:inline">Beautiful Pages to</span>
                                <span class="block text-indigo-600 xl:inline">Tell Your Story!</span>
                            </h1>
                            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never
                                been
                                easier to build beautiful websites that convey your message and tell your story.</p>
                            <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                                <a href="#_"
                                    class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                                    Try It Free
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                                <a href="#_"
                                    class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                            <img src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="bg-white">

            <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">
                <h4 class="text-2xl text-purple-600">Related Articles</h4>
                <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/fruit.jpg">
                        </a>
                        <div
                            class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Lifestyle</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="#_">Creating a Future Worth
                                Living</a>
                        </h2>
                        <p class="text-sm text-gray-500">Learn the attributes you need to gain in order to build a
                            future
                            and create a life that you are truly happy with.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mary Jane</a> · <span
                                class="mx-1">April 17, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/workout.jpg">
                        </a>
                        <div
                            class="bg-pink-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Health</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Healther Version of Yourself</h2>
                        <p class="text-sm text-gray-500">If you want to excel in life and become a better version of
                            yourself, you'll need to upgrade your life.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Fred Jones</a> · <span
                                class="mx-1">April 10, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/food.jpg">
                        </a>
                        <div
                            class="bg-red-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Food</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Enjoy the Meals of the Kings</h2>
                        <p class="text-sm text-gray-500">Take the time to enjoy the life that you've created. It's
                            totally
                            fine to live like kings and eat like royalty.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mike Roberts</a> · <span
                                class="mx-1">April 6, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/books.jpg">
                        </a>
                        <div
                            class="bg-blue-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Motivation</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Writing for Success</h2>
                        <p class="text-sm text-gray-500">Writing about your plans for success is extremely helpful for
                            yourself and it will allow you to share your story.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Tom Johnson</a> · <span
                                class="mx-1">May 25, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/clock.jpg">
                        </a>
                        <div
                            class="bg-gray-800 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Business</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Simple Time Management</h2>
                        <p class="text-sm text-gray-500">Managing your time can make the difference between getting
                            ahead in
                            life or staying exactly where you are.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Scott Reedman</a> ·
                            <span class="mx-1">May 18, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/lemons.jpg">
                        </a>
                        <div
                            class="bg-yellow-400 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Nutrition</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Fruits Life</h2>
                        <p class="text-sm text-gray-500">Take a moment and enjoy to enjoy the many fruits of life.
                            Relaxation and a healthy diet can go a long way.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Jake Caldwell</a> ·
                            <span class="mx-1">May 15, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span>
                        </p>
                    </div>

                </div>
            </div>
        </section>
    </SiteLayout>

</template>