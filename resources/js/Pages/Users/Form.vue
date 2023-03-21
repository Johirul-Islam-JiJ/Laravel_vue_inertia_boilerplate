<template>
    <Admin>
        <Head title="Users"/>
        <v-card class="col-12 col-lg-3 col-md-4 mx-auto rounded-lg"
                flat>
            <v-card-title class="text-h5 justify-center primary--text"
                          v-text="user?'Edit User':'Create User'">
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
                    <v-text-field v-model="form.email"
                                  :error-messages="form.errors.email"
                                  dense
                                  label="Email"
                                  outlined
                                  prepend-inner-icon="mdi-email">
                    </v-text-field>
                    <v-text-field v-model="form.phone"
                                  :error-messages="form.errors.phone"
                                  dense
                                  label="Phone"
                                  outlined
                                  prepend-inner-icon="mdi-phone">
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
                    <v-select v-show="roles"
                              v-model="form.roles"
                              :error-messages="form.errors.roles"
                              :items="roles"
                              chips
                              dense
                              item-text="name"
                              item-value="id"
                              label="Roles"
                              multiple
                              outlined
                              prepend-inner-icon="mdi-shield-account">
                    </v-select>
                    <div class="d-flex">
                        <v-spacer></v-spacer>
                        <Link :href="route('users.index')"
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
        user: Object,
        roles: Array
    },
    data() {
        return {
            form: this.$inertia.form({
                name: this.user ? this.user.name : '',
                email: this.user ? this.user.email : '',
                phone: this.user ? this.user.phone : '',
                address: this.user ? this.user.address : '',
                roles: ''
            })
        }
    },
    methods: {
        submit() {
            if (this.user)
                this.form.put(this.route('users.update', this.user));
            else
                this.form.post(this.route('users.store'));
        }
    }
}
</script>

<style scoped>

</style>
