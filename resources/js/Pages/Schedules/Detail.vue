<script setup>
import { Head , Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref, onMounted } from 'vue';
import { useForm } from "@inertiajs/vue3";
defineProps({
    schedules: {
        type: Object,
    },
});

</script>

<template>
    <div>
        <Head title="Shedule List" />
        <AuthenticatedLayout>
        <main class="mx-auto p-6 w-full">
            <div>
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font text-center">スケジュール詳細</h2>
                <div class="mt-6">
                    {{ schedules.title }}
                    {{ schedules.start_time }}
                    {{ schedules.finish_time }}
                    {{ schedules.memo }}
                </div>
            </div>
            <div class="text-center mt-12">
                <!-- <Link :href="route('schedule.create')" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">スケジュールを作成</Link> -->
            </div>
        </main>
        </AuthenticatedLayout>
    </div>
</template>