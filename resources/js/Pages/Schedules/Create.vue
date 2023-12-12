<script setup>
import { Head , Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref, onMounted } from 'vue';
import { useForm } from "@inertiajs/vue3";
defineProps({
    errors: {
        type: Object,
    },
});

const form = useForm({
    title: null,
    date: null,
    start_time: null,
    finish_time: null,
    memo: null,
  });
</script>

<template>
    <div>
        <Head title="Flight" />
        <AuthenticatedLayout>
        <main class="mx-auto p-6 md:w-1/2 lg:w-1/3 sm:w-3/5">
            <div class="bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">スケジュール作成</h2>
                <form @submit.prevent="form.post('/schedule/store')">
                    <div class="relative mb-4">
                        <label for="title" class="leading-7 text-sm text-gray-600">タイトル</label>
                        <div v-if="form.errors.title" class="text-red-500 font-bold text-lg">{{ form.errors.title }}</div>
                        <input type="text" v-model="form.title" id="title" name="title" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="date" class="leading-7 text-sm text-gray-600">日付</label>
                        <div v-if="form.errors.date" class="text-red-500 font-bold text-lg">{{ form.errors.date }}</div>
                        <input type="date" v-model="form.date" id="date" name="date" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="start_time" class="leading-7 text-sm text-gray-600">開始時刻</label>
                        <div v-if="form.errors.start_time" class="text-red-500 font-bold text-lg">{{ form.errors.start_time }}</div>
                        <input type="time" v-model="form.start_time" id="start_time" name="start_time" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="finish_time" class="leading-7 text-sm text-gray-600">修了時刻</label>
                        <div v-if="form.errors.finish_time" class="text-red-500 font-bold text-lg">{{ form.errors.finish_time }}</div>
                        <input type="time" v-model="form.finish_time" id="finish_time" name="finish_time" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="memo" class="leading-7 text-sm text-gray-600">備考</label>
                        <textarea v-model="form.memo" id="form.memo" name="memo" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" :disabled="form.processing" class="w-24 text-white bg-cyan-500 border-0 py-2 px-6 focus:outline-none hover:bg-cyan-400 rounded text-lg transition-all duration-200">create</button>
                        <Link :href="route('schedule.list')" class="w-24 text-center text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-400 rounded text-lg transition-all duration-200">list</Link>
                    </div>
                </form>
            </div>
        </main>
        </AuthenticatedLayout>
    </div>
</template>
