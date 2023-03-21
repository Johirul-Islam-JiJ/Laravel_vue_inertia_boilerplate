<template>
    <Admin>
        <Head title="Users"/>
        <v-card class="col-12 col-md-4 col-lg-3 mx-auto rounded-lg"
                flat>
            <v-card-title class="text-h5 primary--text justify-center">{{ user.name }} - Assign Roles</v-card-title>
            <v-card-text>
                <h4 class="text-h6 mb-4">Roles</h4>
                <v-form id="rolesForm"
                        @submit.prevent="submit">
                    <div v-for="role in roles"
                         :key="role.id">
                        <label class="text-subtitle-1">
                            <input :checked="assigned.some(current=>current.id===role.id)"
                                   :value="role.id"
                                   class="primary--text"
                                   name="roles[]"
                                   type="checkbox"/>
                            {{ role.name }}
                        </label>
                    </div>

                    <v-divider class="my-4"></v-divider>
                    <div class="d-flex">
                        <v-spacer></v-spacer>
                        <Link :href="route('users.index')"
                              as="v-btn"
                              class="white--text"
                              color="black">Cancel
                        </Link>
                        <v-btn class="primary ml-1"
                               type="submit">
                            Assign
                        </v-btn>
                    </div>
                </v-form>
            </v-card-text>
        </v-card>
    </Admin>
</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue';
import {Inertia} from "@inertiajs/inertia";
import Admin from "@/Layouts/Admin";

export default {
    props: {
        user: Object,
        roles: Array,
        assigned: Array
    },
    components: {
        Admin,
        Head,
        Link
    },
    methods: {
        submit() {
            var formData = new FormData(document.getElementById('rolesForm'));
            Inertia.post(this.route('users.assign.roles', this.user), formData);
        }
    }
}
</script>
