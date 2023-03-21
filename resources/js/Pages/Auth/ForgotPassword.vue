<template>
    <Front>
        <Head title="Forgot Password"/>
        <v-container class="my-12">
            <v-alert
                v-if="status"
                border="left"
                class="success--text mx-auto col-12 col-sm-8 col-md-4 col-xl-3"
                color="success"
                colored-border
            >
                {{ status }}
            </v-alert>

            <v-card class="mx-auto col-12 col-sm-8 col-md-4 col-xl-3 rounded-lg"
                    flat>
                <v-card-subtitle>
                    Forgot your password? No problem. Just let us know your email address and we will email you a
                    password reset link that will allow you to choose a new one.
                </v-card-subtitle>
                <v-card-text>
                    <v-form @submit.prevent="submit">
                        <v-text-field
                            v-model="form.email"
                            :error-messages="form.errors.email"
                            autofocus
                            dense
                            label="Email"
                            outlined
                            prepend-inner-icon="mdi-email"
                        >
                        </v-text-field>

                        <v-btn
                            :disabled="form.processing"
                            block
                            color="primary"
                            type="submit"
                        >
                            Email Password Reset Link
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
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: "",
            }),
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("password.email"));
        },
    },
};
</script>
