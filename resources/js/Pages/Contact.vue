<template>
    <layout title="Welcome">
        <h1>Contact</h1>
        <p>Hello {{ foo }}, Contact!</p>
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
