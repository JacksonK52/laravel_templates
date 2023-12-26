<script setup>
import BlankLayout from '../../Layouts/BlankLayout.vue';
import { ref } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('name', 'email', 'password', 'password_confirmation')
    });
}
</script>

<template>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>

                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <!-- Name -->
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" v-model="form.name" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" class="form-control" v-model="form.email" required autocomplete="email">
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" v-model="form.password" required>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Password Confirm</label>

                                <div class="col-md-6">
                                    <input type="password" name="password-confirm" id="password-confirm" class="form-control" v-model="form.password_confirmation" required>
                                </div>
                            </div>

                            <!-- Form Controls -->
                            <div class="row align-items-center mb-0">
                                <!-- Submit button -->
                                <div class="col-md-4 offset-md-4">
                                    <button type="submit" class="btn btn-primary" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Register</button>
                                </div>

                                <!-- Login Link -->
                                <div class="col-md-4">
                                    <Link :href="route('login')" >Already register?</Link>
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