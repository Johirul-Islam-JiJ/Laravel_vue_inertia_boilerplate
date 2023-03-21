<template>
    <v-dialog v-model="show"
              max-width="500px">
        <v-card>
            <v-card-title class="text-h5">Are you sure you want to delete this item?</v-card-title>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1"
                       text
                       @click="show = !show">Cancel
                </v-btn>
                <v-btn color="blue darken-1"
                       text
                       @click="deleteItem">Confirm
                </v-btn>
                <v-spacer></v-spacer>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";

export default {
    props: {itemId: Number, show: Boolean, route: String},
    methods: {
        deleteItem() {
            Inertia.delete(this.route);
        }
    }
}
</script>

<style scoped>

</style>