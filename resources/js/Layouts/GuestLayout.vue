<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavComponent from '@/Components/Frontend/NavComponent.vue';
</script>

<template>
    <Head title="SM System" />
    <NavComponent />

    <div class="container">

        <slot />
    </div>
</template>
