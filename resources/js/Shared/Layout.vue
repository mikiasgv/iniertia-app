<template>
    <div class="leading-normal tracking-normal" id="main-body">
        <div class="flex flex-wrap">
            <Sidebar :sideBarOpen="sideBarOpen" />

            <div
                class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen"
                :class="sideBarOpen ? 'overlay' : ''"
                id="main-content"
            >
                <Navbar />

                <div class="p-6 bg-gray-100 mb-20">
                    <slot></slot>
                </div>

                <Footer />
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from "@/Components/Sidebar";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
export default {
    components: { Sidebar, Navbar, Footer },
    props: {
        title: String,
    },
    data() {
        return {
            sideBarOpen: false,
        };
    },
    watch: {
        title: {
            immediate: true,
            handler(title) {
                document.title = title;
            },
        },
    },
};
</script>
