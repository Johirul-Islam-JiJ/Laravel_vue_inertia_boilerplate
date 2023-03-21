<template>
    <Admin>
        <Head title="Settings"/>
        <v-card class="col-12 col-md-8 mx-auto rounded-lg"
                flat>
            <v-card-title class="text-h5 justify-center primary--text">
                Edit Settings
            </v-card-title>
            <br>
            <v-card-text>
                <v-form @submit.prevent="submit">
                    <v-row>
                        <v-col class="col-12 col-md-6">
                            <v-text-field v-model="form.name"
                                          :error-messages="form.errors.name"
                                          autofocus
                                          dense
                                          label="Name"
                                          outlined
                                          prepend-inner-icon="mdi-account">
                            </v-text-field>
                            <v-text-field v-model="form.phone"
                                          :error-messages="form.errors.phone"
                                          dense
                                          label="Phone"
                                          outlined
                                          prepend-inner-icon="mdi-phone">
                            </v-text-field>
                            <v-text-field v-model="form.whatsapp"
                                          :error-messages="form.errors.whatsapp"
                                          dense
                                          label="Whatsapp"
                                          outlined
                                          prepend-inner-icon="mdi-whatsapp">
                            </v-text-field>
                            <v-textarea v-model="form.address"
                                        :error-messages="form.errors.address"
                                        dense
                                        label="Address"
                                        no-resize
                                        outlined
                                        prepend-inner-icon="mdi-map-marker"
                                        rows="2">
                            </v-textarea>
                            <v-file-input v-model="form.logo"
                                          :error-messages="form.errors.logo"
                                          :prepend-icon="null"
                                          counter
                                          dense
                                          label="Logo"
                                          outlined
                                          prepend-inner-icon="mdi-camera"
                                          show-size>
                            </v-file-input>
                        </v-col>
                        <v-col class="col-12 col-md-6">
                            <v-text-field v-model="form.email"
                                          :error-messages="form.errors.email"
                                          dense
                                          label="Email"
                                          outlined
                                          prepend-inner-icon="mdi-email">
                            </v-text-field>
                            <v-text-field v-model="form.mobile"
                                          :error-messages="form.errors.mobile"
                                          dense
                                          label="Mobile"
                                          outlined
                                          prepend-inner-icon="mdi-cellphone">
                            </v-text-field>
                            <v-text-field v-model="form.working_hour"
                                          :error-messages="form.errors.working_hour"
                                          dense
                                          label="Working Hour"
                                          outlined
                                          prepend-inner-icon="mdi-clock">
                            </v-text-field>
                            <v-textarea v-model="form.short_description"
                                        :error-messages="form.errors.short_description"
                                        dense
                                        label="Short Description"
                                        no-resize
                                        outlined
                                        prepend-inner-icon="mdi-text"
                                        rows="2">
                            </v-textarea>
                            <v-file-input v-model="form.favicon"
                                          :error-messages="form.errors.favicon"
                                          :prepend-icon="null"
                                          counter
                                          dense
                                          label="Favicon"
                                          outlined
                                          prepend-inner-icon="mdi-camera"
                                          show-size>
                            </v-file-input>
                        </v-col>
                    </v-row>
                    <br>
                    <div class="d-flex">
                        <v-spacer></v-spacer>
                        <Link :href="route('dashboard')"
                              as="v-btn"
                              class="white--text"
                              color="black">Cancel
                        </Link>
                        <v-btn :disabled="form.processing"
                               class="ml-1"
                               color="primary"
                               type="submit">
                            submit
                        </v-btn>
                    </div>
                </v-form>
            </v-card-text>
        </v-card>
    </Admin>
</template>

<script>
import Admin from "@/Layouts/Admin";
import {Head, Link} from "@inertiajs/inertia-vue";

export default {
    components: {
        Admin,
        Link,
        Head,
    },
    props: [
        'settings'
    ],
    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                name: this.settings ? this.settings.name : '',
                email: this.settings ? this.settings.email : '',
                phone: this.settings ? this.settings.phone : '',
                mobile: this.settings ? this.settings.mobile : '',
                whatsapp: this.settings ? this.settings.whatsapp : '',
                address: this.settings ? this.settings.address : '',
                working_hour: this.settings ? this.settings.working_hour : '',
                short_description: this.settings ? this.settings.short_description : '',
                description: this.settings ? this.settings.description : '',
                copyright: this.settings ? this.settings.copyright : '',
                logo: null,
                favicon: null,
            }),
        }
    },
    methods: {
        submit() {
            this.form.post(this.route('settings.update', this.settings));
        }
    }
}
</script>
