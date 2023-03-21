<template>
    <v-app>
<!--        <v-system-bar absolute
                      app
                      color="primary"
                      dark
                      height="35px">
            <v-container class="py-0 fill-height">
                <v-btn :href="'tel:'+$page.props.settings.phone"
                       target="_blank"
                       text>
                    <v-icon color="white"
                            left>
                        mdi-phone
                    </v-icon>
                    {{ $page.props.settings.phone }}
                </v-btn>
                <v-divider v-show="$page.props.settings.mobile"
                           class="hidden-sm-and-down"
                           color="white"
                           inset
                           vertical>
                </v-divider>
                <v-btn v-show="$page.props.settings.mobile"
                       :href="'tel:'+$page.props.settings.mobile"
                       class="hidden-sm-and-down text-lowercase"
                       target="_blank"
                       text>
                    <v-icon color="white"
                            left>
                        mdi-cellphone
                    </v-icon>
                    {{ $page.props.settings.mobile }}
                </v-btn>
                <v-divider class="hidden-sm-and-down"
                           color="white"
                           inset
                           vertical>
                </v-divider>
                <v-btn :href="'mailto:'+$page.props.settings.email"
                       class="hidden-sm-and-down text-lowercase"
                       target="_blank"
                       text>
                    <v-icon color="white"
                            left>
                        mdi-email
                    </v-icon>
                    {{ $page.props.settings.email }}
                </v-btn>
                <v-spacer></v-spacer>
                <v-btn v-show="$page.props.settings.whatsapp"
                       :href="`https://api.whatsapp.com/send?phone=${$page.props.settings.whatsapp}&fbclid=IwAR2OE4Yz4czNZZsxi7XUC1C_AtNhvouHu7Ahy7vPF5_c_FwkUXLWArKCMmw`"
                       class="text-lowercase"
                       icon
                       target="_blank">
                    <v-icon color="white"
                            left>
                        mdi-whatsapp
                    </v-icon>
                </v-btn>
                <v-btn href="https://www.facebook.com"
                       icon
                       target="_blank">
                    <v-icon class="mx-2"
                            color="white">
                        mdi-facebook
                    </v-icon>
                </v-btn>
                <v-btn href="https://www.youtube.com"
                       icon
                       target="_blank">
                    <v-icon class="mx-2"
                            color="white">
                        mdi-youtube
                    </v-icon>
                </v-btn>
                <v-btn href="https://www.twitter.com"
                       icon
                       target="_blank">
                    <v-icon class="mx-2"
                            color="white">
                        mdi-twitter
                    </v-icon>
                </v-btn>
            </v-container>
        </v-system-bar>
        <v-app-bar absolute
                   app
                   color="white"
                   flat
                   height="90px">
            <v-container class="py-0 fill-height">
                <Link :href="route('welcome')"
                      as="v-toolbar-title"
                      icon>
                    <v-img :src="$page.props.settings.logo ? $page.props.settings.logo : 'https://cdn.cdnlogo.com/logos/v/92/vue-js.svg'"
                           class="fill-height"
                           height="90px"
                           width="90px">
                    </v-img>
                </Link>
                <v-spacer></v-spacer>
                <Link v-if="user"
                      :href="route('dashboard')"
                      as="v-btn"
                      color="primary"
                      text>
                    Dashboard
                </Link>
                <Link v-if="!user"
                      :href="route('login')"
                      as="v-btn"
                      color="primary"
                      text>
                    Login
                </Link>
                <Link v-if="!user"
                      :href="route('register')"
                      as="v-btn"
                      color="primary">
                    Register
                </Link>
            </v-container>
        </v-app-bar>-->

        <!-- Sizes your content based upon application components -->
        <v-main class="custom-background">
            <!-- Provides the application the proper gutter -->
            <v-container class="pa-0 fill-height justify-center align-center"
                         fluid>
                <flash-message></flash-message>
                <slot/>
            </v-container>
        </v-main>

<!--        <v-footer absolute
                  app>
            <v-container class="fill-height">
                <v-row>
                    <v-col class="col-12 col-md-4 d-md-flex justify-center">
                        <div class="flex-column">
                            <v-avatar size="150">
                                <img :src="$page.props.settings.logo"
                                     alt="">
                            </v-avatar>
                            <h5>{{ $page.props.settings.short_description }}</h5>
                            <br>
                            <v-btn v-show="$page.props.settings.whatsapp"
                                   :href="`https://api.whatsapp.com/send?phone=${$page.props.settings.whatsapp}&fbclid=IwAR2OE4Yz4czNZZsxi7XUC1C_AtNhvouHu7Ahy7vPF5_c_FwkUXLWArKCMmw`"
                                   class="text-lowercase"
                                   color="primary"
                                   icon
                                   target="_blank">
                                <v-icon class="mx-2">
                                    mdi-whatsapp
                                </v-icon>
                            </v-btn>
                            <v-btn color="primary"
                                   href="https://www.facebook.com"
                                   icon
                                   target="_blank">
                                <v-icon class="mx-2">
                                    mdi-facebook
                                </v-icon>
                            </v-btn>
                            <v-btn color="primary"
                                   href="https://www.youtube.com"
                                   icon
                                   target="_blank">
                                <v-icon class="mx-2">
                                    mdi-youtube
                                </v-icon>
                            </v-btn>
                            <v-btn color="primary"
                                   href="https://www.twitter.com"
                                   icon
                                   target="_blank">
                                <v-icon class="mx-2">
                                    mdi-twitter
                                </v-icon>
                            </v-btn>
                        </div>
                    </v-col>

                    <v-col class="col-12 col-md-4 d-md-flex justify-center">
                        <div class="flex-column">
                            <h3 class="mt-2 text-uppercase px-3">Contact Us</h3>
                            <br>
                            <v-btn :href="'tel:'+$page.props.settings.phone"
                                   target="_blank"
                                   text>
                                <v-icon left>
                                    mdi-phone
                                </v-icon>
                                {{ $page.props.settings.phone }}
                            </v-btn>
                            <br>
                            <v-btn v-show="$page.props.settings.mobile"
                                   :href="'tel:'+$page.props.settings.mobile"
                                   target="_blank"
                                   text>
                                <v-icon left>
                                    mdi-cellphone
                                </v-icon>
                                {{ $page.props.settings.mobile }}
                            </v-btn>
                            <br v-if="$page.props.settings.mobile">
                            <v-btn :href="'mailto:'+$page.props.settings.email"
                                   class="text-lowercase"
                                   target="_blank"
                                   text>
                                <v-icon left>
                                    mdi-email
                                </v-icon>
                                {{ $page.props.settings.email }}
                            </v-btn>
                            <br>
                            <v-btn :href="'https://maps.google.com/?q='+address"
                                   class="link"
                                   target="_blank"
                                   text>
                                <v-icon left>
                                    mdi-map-marker
                                </v-icon>
                                {{ $page.props.settings.address }}
                            </v-btn>
                        </div>
                    </v-col>
                    <v-col class="col-12 col-md-4 d-md-flex justify-center">
                        <div class="flex-column">
                            <h3 class="mt-2 text-uppercase px-3">Quick Links</h3>
                            <br>
                            <Link as="v-btn"
                                  class="link"
                                  text>
                                Services
                            </Link>
                            <br>
                            <Link as="v-btn"
                                  class="link"
                                  text>
                                Packages
                            </Link>
                            <br>
                            <Link as="v-btn"
                                  class="link"
                                  text>
                                About Us
                            </Link>
                            <br>
                            <Link as="v-btn"
                                  class="link"
                                  text>
                                Contact Us
                            </Link>
                            <br>
                            <Link as="v-btn"
                                  class="link"
                                  text>
                                Terms and Policies
                            </Link>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
            <v-row>
                <v-col class="px-0 text-center"
                       cols="12">
                    <v-divider></v-divider>
                    <div class="mt-2">{{ $page.props.settings.copyright }}</div>
                </v-col>
            </v-row>
        </v-footer>-->
    </v-app>
</template>

<style>
html {
    overflow-y: auto;
}
</style>

<script>
import {Link} from "@inertiajs/inertia-vue";
import FlashMessage from "@/Components/FlashMessage";

export default {
    components: {
        Link,
        FlashMessage,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    computed: {
        user() {
            return this.$page.props.auth.user;
        },
        address() {
            return this.$page.props.settings.address.replace(/[^a-z0-9_]+/gi, '-').replace(/^-|-$/g, '').toLowerCase();
        }
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

.link {
    white-space: normal;
    text-transform: none;
}
</style>
