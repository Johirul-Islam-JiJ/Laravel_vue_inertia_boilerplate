<template>
    <Admin>
        <Head title="Permissions"/>
        <v-card class="col-12 col-lg-3 col-md-4 mx-auto rounded-lg"
                flat>
            <v-card-title class="text-h5 justify-center primary--text"
                          v-text="permission?'Edit Permission':'Create Permission'">
            </v-card-title>
            <br>
            <v-card-text>
                <v-form @submit.prevent="submit">
                    <v-text-field v-model="form.name"
                                  :error-messages="form.errors.name"
                                  autofocus
                                  dense
                                  label="Name"
                                  outlined
                                  prepend-inner-icon="mdi-account">
                    </v-text-field>
                    <div class="d-flex">
                        <v-spacer></v-spacer>
                        <Link :href="route('permissions.index')"
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
        Head
    },
    props: {
        permission: Object
    },
    data() {
        return {
            form: this.$inertia.form({
                name: this.permission ? this.permission.name : '',
            })
        }
    },
    methods: {
        submit() {
            if (this.permission)
                this.form.put(this.route('permissions.update', this.permission));
            else
                this.form.post(this.route('permissions.store'));
        }
    }
}
</script>
