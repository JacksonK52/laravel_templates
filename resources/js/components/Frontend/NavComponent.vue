<script setup>
import { Link } from '@inertiajs/vue3';
// import NavComponents from '../Components/NavComponents.vue';
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 fw-bold">SM System</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Home -->
                    <li class="nav-item">
                        <Link class="nav-link" :class="{ 'active': $page.url === '/' }" aria-current="page" href="/">Home</Link>
                    </li>
                    <!-- Login -->
                    <li class="nav-item">
                        <a class="nav-link" :class="{ 'active': $page.url === '/login' }" href="/login">Login</a>
                    </li>
                    <!-- Register -->
                    <li class="nav-item">
                        <a class="nav-link" :class="{ 'active': $page.url === '/register' }" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
