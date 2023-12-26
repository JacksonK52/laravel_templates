<script setup>
import { ref } from 'vue';
import BlankLayout from '../../Layouts/BlankLayout.vue';

const form = ref();

const handleSubmit = () => {

}
</script>

<template>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>

                    <div class="card-body">
                        <form @submit.prevent="handleSubmit()">
                            <!-- Name -->
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" class="form-control" required autocomplete="email">
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Password Confirm</label>

                                <div class="col-md-6">
                                    <input type="password" name="password-confirm" id="password-confirm" class="form-control" required>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    layout: BlankLayout
}
</script>