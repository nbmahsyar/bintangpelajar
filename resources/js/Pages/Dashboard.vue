<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios';
</script>
<script>
export default {
    data() {
        return {
            list: [],
            user: {
                name: '',
                email: ''
            }
        }
    },
    methods: {
        fetchData(){

            this.user.name = this.$page.props.auth.user.name
            this.user.email = this.$page.props.auth.user.email

            axios.post('/api/list-user', this.user).then( response => {
                this.list = response.data.users;
                console.log(this.list);
            })

        },
    },
    mounted(){
        this.fetchData();
    }
}
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th class="p-4">
                                Name
                            </th>
                            <th class="p-4">
                                Email
                            </th>
                            <th class="p-4">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="row in list">
                            <td class="p-4">{{ row.name }}</td>
                            <td class="p-4">{{ row.email }}</td>
                            <td class="p-4">{{ row.status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
