<template>
    <Admin>
        <Head title="Dashboard"/>
        <v-card>
            <v-card-title>Dashboard</v-card-title>
        </v-card>
    </Admin>
</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue";
import Admin from "@/Layouts/Admin";

export default {
    components: {
        Head,
        Link,
        Admin
    },
};
</script>
