<script setup>
import { Head , Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineProps({
    schedules: {
        type: Array,
    },
});

</script>

<template>
    <div>
        <Head title="Schedule List" />
        <AuthenticatedLayout>
        <main class="mx-auto p-6 w-full">
            <div>
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font text-center">スケジュール一覧</h2>
                <div class="mt-6">
                    <ul class="mx-auto">
                        <Link v-for="schedule in schedules" :key="schedule.id" :href="route('schedule.detail', { id: schedule.id })">
                            <li class="bg-teal-200 py-2 px-4 mb-4 rounded-md flex items-center justify-between md:w-128 w-96 mx-auto hover:bg-teal-100 text-lg transition-all duration-200">
                                {{ schedule.date }} : {{ schedule.start_time }} ： {{ schedule.title }}
                            </li>
                        </Link>                    
                    </ul>
                </div>
            </div>
            <div class="text-center mt-12">
                <Link :href="route('schedule.create')" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-400 rounded text-lg transition-all duration-200">スケジュールを作成</Link>
            </div>
        </main>
        </AuthenticatedLayout>
    </div>
</template>