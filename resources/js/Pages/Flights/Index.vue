<script setup>
import { Head , Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineProps({
    users: {
        type: Object,
    },
    flights: {
        type: Object,
    }
});
</script>

<template>
    <div>
        <Head title="Flight" />
        <AuthenticatedLayout>
            <section class="text-gray-600 body-font">
                <div class="px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-8">
                        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Have a nice flight with us!</h1>
                    </div>
                    <div class="w-full mx-auto">
                        <div>
                            <p>{{ users.name }}</p>
                        </div>
                        <div>
                            <p>FLIGHT</p>
                        </div>
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">航空会社</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">出発</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">出発都市</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">到着</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">到着都市</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">クラス</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">フライト時間</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">食事</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">飛行距離</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">機材</th>
                                    <th class="px-3 py-2 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">航空会社予約番号</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-3 py-2">{{ flights.airline_company }}</td>
                                    <td class="px-3 py-2">{{ flights.departure_time }}</td>
                                    <td class="px-3 py-2">{{ flights.departure_city }}</td>
                                    <td class="px-3 py-2">{{ flights.arrival_time }}</td>
                                    <td class="px-3 py-2">{{ flights.arrival_city }}</td>
                                    <td class="px-3 py-2">{{ flights.class }}</td>
                                    <td class="px-3 py-2">{{ flights.flight_time }}</td>
                                    <td class="px-3 py-2">{{ flights.eat }}</td>
                                    <td class="px-3 py-2">{{ flights.flight_distance }}</td>
                                    <td class="px-3 py-2">{{ flights.equipment }}</td>
                                    <td class="px-3 py-2">{{ flights.reservation_number }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-12 text-center">
                            <Link :href="route('schedule.list')" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">スケジュール</Link>
                        </div>
                    </div>
                </div>
            </section>
        </AuthenticatedLayout>
    </div>
</template>