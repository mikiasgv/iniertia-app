<template>
    <layout title="Create a new user">
        <div class="flex flex-wrap -mx-3 mb-20">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Personal Information
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Use a permanent address where you can receive mail.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form
                        action="/users"
                        method="POST"
                        @submit.prevent="createUser"
                    >
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label
                                            for="name"
                                            class="block text-sm font-medium text-gray-700"
                                            >Name</label
                                        >
                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            v-model="form.name"
                                            autocomplete="given-name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        />
                                        <div
                                            v-if="errors.name"
                                            class="text-red-500 text-sm"
                                        >
                                            {{ errors.name }}
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label
                                            for="email"
                                            class="block text-sm font-medium text-gray-700"
                                            >Email address</label
                                        >
                                        <input
                                            type="text"
                                            name="email"
                                            id="email"
                                            v-model="form.email"
                                            autocomplete="email"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        />
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label
                                            for="password"
                                            class="block text-sm font-medium text-gray-700"
                                            >Password</label
                                        >
                                        <input
                                            type="password"
                                            name="password"
                                            id="password"
                                            v-model="form.password"
                                            autocomplete="password"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-4 py-3 bg-gray-50 text-right sm:px-6"
                            >
                                <button
                                    type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from "@/Shared/Layout";

export default {
    props: ["errors"],
    components: {
        Layout,
    },
    remember: "form",
    data() {
        return {
            form: this.$inertia.form({
                name: "",
                email: "",
                passwor: "",
            }),
        };
    },
    methods: {
        createUser() {
            this.form.post(this.route("user.store"));
        },
    },
};
</script>
