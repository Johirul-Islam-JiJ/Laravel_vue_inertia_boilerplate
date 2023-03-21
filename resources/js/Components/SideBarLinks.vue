<template>
    <v-list-item-group v-model="group"
                       color="primary">
        <Link :class="route().current('dashboard') ? 'v-list-item--active' : ''"
              :href="route('dashboard')"
              as="v-list-item">
            <v-list-item-icon>
                <v-icon>mdi-view-dashboard</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Dashboard</v-list-item-title>
        </Link>

        <Link :class="route().current('users.*') ? 'v-list-item--active' : ''"
              :href="route('users.index')"
              as="v-list-item">
            <v-list-item-icon>
                <v-icon>mdi-account-group</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Users</v-list-item-title>
        </Link>

        <Link :class="route().current('roles.*') ? 'v-list-item--active' : ''"
              :href="route('roles.index')"
              as="v-list-item">
            <v-list-item-icon>
                <v-icon>mdi-shield-account</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Roles</v-list-item-title>
        </Link>

        <Link :class="route().current('permissions.*') ? 'v-list-item--active' : ''"
              :href="route('permissions.index')"
              as="v-list-item">
            <v-list-item-icon>
                <v-icon>mdi-shield-half-full</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Permissions</v-list-item-title>
        </Link>

        <Link :class="route().current('settings.*') ? 'v-list-item--active' : ''"
              :href="route('settings.edit', $page.props.settings.id)"
              as="v-list-item">
            <v-list-item-icon>
                <v-icon>mdi-cog</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Settings</v-list-item-title>
        </Link>

        <Link :class="route().current('logs.*') ? 'v-list-item--active' : ''"
              :href="route('logs.index')"
              as="v-list-item">
            <v-list-item-icon>
                <v-icon>mdi-format-list-checks</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Activity Log</v-list-item-title>
        </Link>
    </v-list-item-group>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue";
export default {
    components:{
        Link
    },
    data() {
        return {
            group: null
        }
    }
}
</script>
