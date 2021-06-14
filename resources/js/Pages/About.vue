<template>
    <layout title="Welcome">
        <h1>About</h1>
        <p>Hello {{ foo }}, About!</p>
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
