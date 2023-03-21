<template>
    <Front>
        <v-container class="pa-0"
                     fluid>
            <v-card flat
                    tile>
                <v-img class="align-center justify-center"
                       height="650px"
                       src="/images/verne-ho-0LAJfSNa-xQ-unsplash.jpg">
                    <v-overlay absolute
                               color="primary">
                        <v-card-title class="text-center col-8 offset-2">
                            <h1 class="white--text display-2 font-weight-bold text-wrap">
                                Register your Limited Company with the UK’s leading company
                                formations agent.
                            </h1>
                        </v-card-title>
                        <br>
                        <v-card-text class="col-8 offset-2 text-center">
                            <form @submit.prevent="submit">
                                <v-text-field v-model="form.search"
                                              :error-messages="form.errors.search"
                                              class="search-box"
                                              hide-details
                                              label="Search Your Company Name"
                                              light
                                              rounded
                                              solo>
                                    <template v-slot:append>
                                        <v-btn icon
                                               type="submit">
                                            <v-icon>mdi-magnify</v-icon>
                                        </v-btn>
                                    </template>
                                </v-text-field>
                            </form>
                        </v-card-text>
                    </v-overlay>
                </v-img>
            </v-card>
        </v-container>
    </Front>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue";
import Front from "@/Layouts/Front";

export default {
    components: {
        Front,
        Link,
    },
    data() {
        return {
            form: this.$inertia.form({
                search: ''
            })
        }
    },
    methods: {
        submit() {
            // this.form.get()
        }
    }
};
</script>
