<template>
    <v-app>
        <v-app-bar app
                   clipped-left
                   color="primary"
                   dark>
            <Link :href="route('welcome')"
                  as="v-toolbar-title"
                  class="mx-4">
                <v-avatar color="primary"
                          rounded
                          left
                          size="50">
                    <img :src="$page.props.settings.logo ? $page.props.settings.logo : 'https://cdn.cdnlogo.com/logos/v/92/vue-js.svg'"
                         alt="logo">
                </v-avatar>
                {{ ($page.props.settings) ? $page.props.settings.name : 'Laravel' }}
            </Link>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-spacer></v-spacer>

            <v-btn icon>
                <v-icon>mdi-magnify</v-icon>
            </v-btn>
            <v-menu left
                    offset-y
                    transition="slide-y-transition">
                <template v-slot:activator="{ on, attrs }">
                    <v-btn icon
                           v-bind="attrs"
                           v-on="on">
                        <v-icon>mdi-bell-outline</v-icon>
                    </v-btn>
                </template>

                <v-list dense>
                    <v-list-item v-for="n in 5"
                                 :key="n"
                                 @click="() => {}">
                        <v-list-item-title>Option {{ n }}</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>
            <v-menu offset-y
                    transition="slide-y-transition">
                <template v-slot:activator="{ on, attrs }">
                    <v-btn icon
                           style="text-transform: none"
                           v-bind="attrs"
                           v-on="on">
                        <v-icon>mdi-account
                        </v-icon>
                    </v-btn>
                </template>

                <v-list dense>
                    <v-list-item @click="()=>{}">
                        <v-icon left
                                small>mdi-account
                        </v-icon>
                        <v-list-item-title>Profile</v-list-item-title>
                    </v-list-item>
                    <Link :href="route('logout')"
                          as="v-list-item"
                          method="post"
                          small
                          text>
                        <v-icon left
                                small>
                            mdi-power
                        </v-icon>
                        <v-list-item-title>Logout</v-list-item-title>
                    </Link>
                </v-list>
            </v-menu>
        </v-app-bar>

        <v-navigation-drawer v-model="drawer"
                             :mini-variant.sync="mini"
                             :permanent="permanent"
                             app
                             clipped
                             floating
                             light>
            <v-list class="px-0"
                    dense
                    nav>
                <v-list-item>
                    <v-list-item-avatar left
                                        size="35">
                        <v-img v-if="user.avatar"
                               :src="user.avatar">
                        </v-img>
                        <v-icon v-else
                                large>
                            mdi-account-circle
                        </v-icon>
                    </v-list-item-avatar>

                    <v-list-item-content>
                        <v-list-item-title>{{ user.name }}</v-list-item-title>
                        <v-list-item-subtitle>
                            {{ role }}
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
                <v-divider></v-divider>

                <SideBarLinks/>
            </v-list>
        </v-navigation-drawer>

        <!-- Sizes your content based upon application components -->
        <v-main class="custom-background">
            <!-- Provides the application the proper gutter -->
            <v-container class="px-5 py-4"
                         fluid>
                <flash-message></flash-message>
                <slot/>
            </v-container>
        </v-main>
        <v-footer absolute
                  app
                  class="grey lighten-5"
                  inset>
            <v-col class="text-center"
                   cols="12">
                Copyright &copy; {{ $page.props.app.name }}
            </v-col>
        </v-footer>
    </v-app>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue";
import FlashMessage from "@/Components/FlashMessage";
import SideBarLinks from "@/Components/SideBarLinks";

export default {
    components: {
        Link,
        FlashMessage,
        SideBarLinks
    },
    data() {
        return {
            drawer: false,
        };
    },
    computed: {
        user() {
            return this.$page.props.auth.user;
        },
        role() {
            return this.$page.props.auth.user.roles[0].name;
        },
        permanent() {
            return this.$vuetify.breakpoint.mdAndUp;
        },
        mini() {
            return this.permanent && !this.drawer;
        },
    },
};
</script>

<style>
html {
    overflow-y: auto;
}

.custom-background {
    background-color: #eef5f9;
}

tbody tr:nth-of-type(odd) {
    background-color: #eef3fd;
}

th {
    font-size: 14px !important;
}

.thead {
    text-align: left;
    width: 150px;
    vertical-align: top;
}

.v-data-table td {
    max-width: 300px !important;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.v-card__text, .v-card__title {
    word-break: normal !important;
}
</style>
