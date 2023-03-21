<template>
    <Front>
        <Head title="Confirm Password"/>

        <v-container class="my-12">
            <v-card class="mx-auto col-12 col-sm-8 col-md-4 col-xl-3 rounded-lg"
                    flat>
                <v-card-subtitle>
                    This is a secure area of the application. Please confirm your password before continuing.
                </v-card-subtitle>

                <v-card-text class="my-4">
                    <v-form @submit.prevent="submit">
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
                        <v-btn
                            :disabled="form.processing"
                            block
                            color="primary"
                            type="submit"
                        >
                            Confirm
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

    data() {
        return {
            form: this.$inertia.form({
                password: "",
            }),
            show: null,
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("password.confirm"), {
                onFinish: () => this.form.reset(),
            });
        },
    },
};
</script>
