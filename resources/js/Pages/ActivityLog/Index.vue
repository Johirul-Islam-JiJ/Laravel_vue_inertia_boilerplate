<template>
    <Admin>
        <Head title="Activity Log"/>
        <data-table :filters="filters"
                    :headers="headers"
                    :index-route="this.route('logs.index')"
                    :items="logs">
            <template v-slot:title>Activity Log</template>

            <template v-slot:default="slotProp">
                <v-btn color="info"
                       icon
                       small
                       title="activity"
                       @click="showItem(slotProp.item)">
                    <v-icon small>
                        mdi-eye
                    </v-icon>
                </v-btn>
            </template>
        </data-table>

        <v-dialog
            v-model="dialogLog"
            max-width="65%">
            <v-card>
                <v-card-title class="text-h5">Activity</v-card-title>
                <v-card-text>
                    <v-row v-if="log.activity">
                        <v-col class="col-12 col-md-6">
                            <h6 class="text-h6">Before Change</h6>
                            <br>
                            <div>
                                <h6 v-for="(change, key, index) in JSON.parse(log.activity.before_change)"
                                    class="subtitle-2">
                                    {{ key }}: {{ change }},
                                </h6>
                            </div>
                        </v-col>
                        <v-col class="col-12 col-md-6">
                            <h6 class="text-h6">After Change</h6>
                            <br>
                            <h6 v-for="(change, key, index) in JSON.parse(log.activity.after_change)"
                                class="subtitle-2">
                                {{ key }}: {{ change }},
                            </h6>
                        </v-col>
                    </v-row>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn
                        color="primary"
                        @click="dialogLog = !dialogLog">
                        Close
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </Admin>
</template>

<script>
import Admin from "@/Layouts/Admin";
import {Head, Link} from "@inertiajs/inertia-vue";
import DataTable from "@/Components/DataTable";

export default {
    components: {
        Head,
        Admin,
        Link,
        DataTable,
    },
    props: ["logs", "filters"],
    data() {
        return {
            headers: [
                {text: "Action", value: "action"},
                {text: "Model", value: "loggable_type"},
                {text: "Date Time", value: "created_at"},
                {text: "User Name", value: "user.name"},
                {text: "Actions", value: "actions", sortable: false},
            ],
            dialogLog: false,
            log: {},
        };
    },
    methods: {
        showItem(item) {
            this.dialogLog = true;
            this.log = item;
        },
    },
};
</script>
