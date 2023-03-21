<template>
    <div>
        <Component :is="(link.url) ? 'Link' : 'span'"
                   v-for="(link, index) in links"
                   :key="index"
                   :class="{'grey--text': !link.url, 'primary--text font-weight-bold': link.active}"
                   :href="link.url"
                   class="px-1 black--text text-decoration-none"
                   v-html="link.label">
        </Component>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue";

export default {
    components: {
        Link
    },
    props: {
        links: Array
    }
}
</script>