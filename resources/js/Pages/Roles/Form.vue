<template>
    <Admin>
        <Head title="Roles"/>
        <v-card class="col-12 col-lg-3 col-md-4 mx-auto rounded-lg"
                flat>
            <v-card-title class="text-h5 justify-center primary--text"
                          v-text="role?'Edit Role':'Create Role'">
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
                    <v-select v-show="permissions"
                              v-model="form.permissions"
                              :error-messages="form.errors.permissions"
                              :items="permissions"
                              chips
                              dense
                              item-text="name"
                              item-value="id"
                              label="Permissions"
                              multiple
                              outlined
                              prepend-inner-icon="mdi-shield-half-full">
                    </v-select>
                    <div class="d-flex">
                        <v-spacer></v-spacer>
                        <Link :href="route('roles.index')"
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
        role: Object,
        permissions: Array
    },
    data() {
        return {
            form: this.$inertia.form({
                name: this.role ? this.role.name : '',
                permissions: ''
            })
        }
    },
    methods: {
        submit() {
            if (this.role)
                this.form.put(this.route('roles.update', this.role));
            else
                this.form.post(this.route('roles.store'));
        }
    }
}
</script>
