<template>
    <Front>
        <Head title="Reset Password"/>
        <v-container class="my-12">
            <v-card class="mx-auto col-12 col-sm-8 col-md-4 col-xl-3 rounded-lg"
                    flat>
                <v-card-title
                    class="text-h5 justify-center"
                    secondary-title
                >Reset Password
                </v-card-title>
                <v-card-text class="my-4">
                    <v-form @submit.prevent="submit">
                        <v-text-field
                            v-model="form.email"
                            :error-messages="form.errors.email"
                            autofocus
                            dense
                            label="Email"
                            prepend-inner-icon="mdi-email"
                            solo
                        >
                        </v-text-field>
                        <v-text-field
                            v-model="form.password"
                            :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                            :error-messages="form.errors.password"
                            :type="show ? 'text' : 'password'"
                            dense
                            label="Password"
                            prepend-inner-icon="mdi-lock"
                            solo
                            @click:append="show = !show"
                        >
                        </v-text-field>
                        <v-text-field
                            v-model="form.password_confirmation"
                            :append-icon="confirmShow ? 'mdi-eye' : 'mdi-eye-off'"
                            :error-messages="form.errors.password_confirmation"
                            :type="confirmShow ? 'text' : 'password'"
                            dense
                            label="Confirm Password"
                            prepend-inner-icon="mdi-lock"
                            solo
                            @click:append="confirmShow = !confirmShow"
                        >
                        </v-text-field>
                        <v-btn
                            :disabled="form.processing"
                            block
                            color="primary"
                            type="submit"
                        >
                            Reset Password
                        </v-btn>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-container>
    </Front>
</template>

<script>
import {Head} from "@inertiajs/inertia-vue";
import Front from "@/Layouts/Front";

export default {
    components: {
        Front,
        Head,
    },

    props: {
        email: String,
        token: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                token: this.token,
                email: this.email,
                password: "",
                password_confirmation: "",
            }),
            show: null,
            confirmShow: null,
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("password.update"), {
                onFinish: () => this.form.reset("password", "password_confirmation"),
            });
        },
    },
};
</script>
