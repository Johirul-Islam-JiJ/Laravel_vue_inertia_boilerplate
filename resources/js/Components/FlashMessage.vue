<template>
    <div>
        <v-alert v-if="$page.props.flash.success"
                 v-model="show"
                 border="left"
                 class="primary--text"
                 color="primary"
                 colored-border
                 dismissible>
            {{ $page.props.flash.success }}
        </v-alert>
        <v-alert v-if="$page.props.flash.error"
                 v-model="show"
                 border="left"
                 class="error--text"
                 color="error"
                 colored-border
                 dismissible>
            {{ $page.props.flash.error }}
        </v-alert>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: true,
        }
    },
    watch: {
        '$page.props.flash': {
            handler() {
                this.show = true
            },
            deep: true,
        },
    },
}
</script>
