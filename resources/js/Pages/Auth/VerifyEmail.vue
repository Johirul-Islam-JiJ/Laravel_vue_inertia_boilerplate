<template>
    <Front>
        <Head title="Email Verification"/>

        <v-container class="my-12">
            <v-alert
                v-if="verificationLinkSent"
                border="left"
                class="success--text mx-auto col-12 col-sm-8 col-md-4 col-xl-3"
                color="success"
                colored-border
            >
                A new verification link has been sent to the email address you provided during registration.
            </v-alert>

            <v-card class="mx-auto col-12 col-sm-8 col-md-4 col-xl-3 rounded-lg"
                    flat>
                <v-card-subtitle class="mb-4 text-sm text-gray-600">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on
                    the
                    link
                    we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </v-card-subtitle>

                <v-card-text>
                    <form @submit.prevent="submit">
                        <div class="d-flex align-center">
                            <v-btn
                                :disabled="form.processing"
                                color="primary"
                                type="submit"
                            >
                                Resend Verification Email
                            </v-btn>
                            <v-spacer></v-spacer>
                            <Link
                                :href="route('logout')"
                                as="v-btn"
                                color="primary"
                                method="post"
                                small
                                text
                            >
                                Log Out
                            </Link>
                        </div>
                    </form>
                </v-card-text>
            </v-card>
        </v-container>
    </Front>
</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue";
import Front from "@/Layouts/Front";

export default {
    components: {
        Front,
        Head,
        Link,
    },

    props: {
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form(),
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("verification.send"));
        },
    },

    computed: {
        verificationLinkSent() {
            return this.status === "verification-link-sent";
        },
    },
};
</script>
