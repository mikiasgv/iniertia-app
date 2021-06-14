<template>
    <layout title="Welcome">
        <h1>Welcome</h1>
        <p>Hello {{ foo }}, welcome to your first Inertia app!</p>
    </layout>
</template>

<script>
import Layout from "../Shared/Layout";

export default {
    components: {
        Layout,
    },
    props: {
        foo: String,
    },
};
</script>
