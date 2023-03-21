<template>
    <Front>
        <Head title="Login"/>
        <v-container class="my-12 justify-center align-center">
            <div class="d-md-flex justify-center">
                <div class="flex-column hidden-sm-and-down"
                     style="border-right: 2px solid #F5F5F5">
                    <v-card class="rounded-tl-lg rounded-bl-lg pa-12"
                            flat
                            height="400px"
                            tile
                            width="400px">
                        <v-card-title class="justify-center align-center secondary--text">
                            <v-img :src="$page.props.settings.logo ? $page.props.settings.logo : 'https://cdn.cdnlogo.com/logos/v/92/vue-js.svg'"
                                   alt="logo"
                                   contain
                                   height="150px"
                                   width="150px">
                            </v-img>
                            <br>
                            <h3>Welcome Back,</h3>
                            <h4>Login to access all features.</h4>
                        </v-card-title>
                    </v-card>
                </div>
                <div class="flex-column">
                    <v-card class="rounded-tr-lg rounded-br-lg py-5 px-2"
                            flat
                            height="400px"
                            tile
                            width="400px">
                        <v-card-title class="text-h5 justify-center secondary--text font-weight-bold">Login
                        </v-card-title>
                        <v-card-text class="py-2">
                            <v-form @submit.prevent="submit">
                                <v-text-field
                                    v-model="form.email"
                                    :error-messages="form.errors.email"
                                    dense
                                    label="Email"
                                    outlined
                                    prepend-inner-icon="mdi-email"
                                >
                                </v-text-field>
                                <v-text-field
                                    v-model="form.password"
                                    :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                                    :error-messages="form.errors.password"
                                    :type="show ? 'text' : 'password'"
                                    class="mt-4"
                                    dense
                                    label="Password"
                                    outlined
                                    prepend-inner-icon="mdi-lock"
                                    @click:append="show = !show"
                                >
                                </v-text-field>
                                <div class="d-md-flex align-center">
                                    <v-checkbox
                                        v-model:checked="form.remember"
                                        color="primary"
                                        label="Remember Me"
                                    >
                                    </v-checkbox>

                                    <v-spacer></v-spacer>

                                    <Link
                                        :href="route('password.request')"
                                        color="primary"
                                    >
                                        forgot your password?
                                    </Link>
                                </div>
                                <v-btn
                                    :disabled="form.processing"
                                    block
                                    class="mt-3"
                                    color="primary"
                                    type="submit"
                                >
                                    SUBMIT
                                </v-btn>
                            </v-form>
                        </v-card-text>
                    </v-card>
                </div>
            </div>
        </v-container>
    </Front>
</template>

<script>
import Front from "@/Layouts/Front";
import {Head, Link} from "@inertiajs/inertia-vue";

export default {
    components: {
        Front,
        Link,
        Head,
    },
    data() {
        return {
            show: false,
            form: this.$inertia.form({
                email: "",
                password: "",
                remember: false,
            }),
        };
    },
    methods: {
        submit() {
            this.form.post(this.route("login"), {
                onFinish: () => this.form.reset("password"),
            });
        },
    },
};
</script>
