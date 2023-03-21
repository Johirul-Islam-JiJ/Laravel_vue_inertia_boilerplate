<template>
    <div>
        <div class="d-md-flex">
            <h1 class="headline primary--text font-weight-bold pb-2 pb-md-0">
                <slot name="title"></slot>
            </h1>
            <v-spacer></v-spacer>
            <v-text-field
                v-model="params.search"
                class="col-12 col-md-3 col-lg-2 pr-0 pr-md-2 pb-2 pb-md-0"
                dense
                flat
                floating
                hide-details
                label="Search"
                prepend-inner-icon="mdi-magnify"
                rounded
                solo
            >
            </v-text-field>
            <slot name="create-button"></slot>
        </div>

        <v-data-table
            :headers="headers"
            :items="items.data"
            :server-items-length="items.data.length"
            :sort-by.sync="params.sortBy"
            :sort-desc.sync="params.sortDesc"
            class="my-2"
            floating
            hide-default-footer
        >
            <template v-slot:item.actions="{ item }">
                <slot :item="item"></slot>
            </template>

            <template v-for="slot in slots"
                      v-slot:[`item.${slot}`]="{ item }">
                <slot :item="item"
                      :name=[slot]>
                    {{ item[slot].length ? item[slot] : '' }}
                </slot>
            </template>
        </v-data-table>

        <div class="d-md-flex">
            <v-select
                v-model="params.perPage"
                :items="[5,10,15,20,25]"
                class="col-12 col-md-1 text-caption"
                dense
                flat
                floating
                hide-details
                prefix="Items:"
                solo
            >
            </v-select>
            <v-spacer></v-spacer>
            <Paginator
                :links="items.links"
                class="mt-1"
            ></Paginator>
        </div>
    </div>
</template>

<script>
import Authenticated from "@/Layouts/Admin";
import {Inertia} from "@inertiajs/inertia";
import {debounce} from "lodash";
import Paginator from "@/Components/Paginator";

export default {
    components: {
        Authenticated,
        Paginator,
    },
    props: ["headers", "items", "filters", "indexRoute","slots"],
    data() {
        return {
            params: {
                search: this.filters.search ? this.filters.search : "",
                sortBy: this.filters.sortBy ? this.filters.sortBy : null,
                sortDesc: !!this.filters.sortDesc,
                perPage: this.filters.perPage ? parseInt(this.filters.perPage) : 10,
            },
        };
    },
    watch: {
        params: {
            handler(value) {
                if (value.perPage !== parseInt(this.filters.perPage))
                    this.params.page = 1;
                else this.params.page = this.items.current_page;
                this.updateData();
            },
            deep: true,
        },
        search: debounce(function (value) {
            this.params.search = value;
            this.updateData();
        }, 300),
    },
    methods: {
        async updateData() {
            await Inertia.get(this.indexRoute, this.params, {
                preserveScroll: true,
                preserveState: true,
                replace: true,
            });
        },
    },
};
</script>
