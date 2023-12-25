<script setup>
import { Link } from '@inertiajs/vue3';
import NavComponent from '@/Components/Frontend/NavComponent.vue';
</script>

<template>
    <NavComponent />

    <div class="container">

        <slot />
    </div>
</template>
