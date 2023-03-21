<template>
	<Admin>

		<Head title="Permissions" />
		<data-table
			:filters="filters"
			:headers="headers"
			:index-route="this.route('permissions.index')"
			:items="permissions"
		>
			<template v-slot:title>Permissions</template>

			<template v-slot:default="slotProp">
				<div v-if="slotProp.item.deleted_at === 'Active'">
					<Link
						:href="route('permissions.edit', slotProp.item)"
						as="v-btn"
						color="primary"
						icon
						small
						title="edit"
					>
					<v-icon small>mdi-pencil</v-icon>
					</Link>
					<Link
						:href="route('permissions.destroy', slotProp.item)"
						as="v-btn"
						color="warning"
						icon
						method="delete"
						small
						title="delete"
					>
					<v-icon small>mdi-delete</v-icon>
					</Link>
				</div>

				<div v-else>
					<Link
						:href="route('permissions.restore', slotProp.item)"
						as="v-btn"
						color="success"
						icon
						method="post"
						small
						title="restore"
					>
					<v-icon small>mdi-recycle</v-icon>
					</Link>
					<v-btn
						color="error"
						icon
						small
						title="force-delete"
						@click="deleteItem(slotProp.item)"
					>
						<v-icon small>
							mdi-delete
						</v-icon>
					</v-btn>
				</div>
			</template>

			<template v-slot:create-button>
				<Link
					:href="route('permissions.create')"
					as="v-btn"
					class="flex-column"
					color="primary"
					rounded
				>
				Create
				<v-icon right>mdi-plus-circle-outline</v-icon>
				</Link>
			</template>
		</data-table>

		<v-dialog
			v-model="dialogDelete"
			max-width="500px"
		>
			<v-card>
				<v-card-title class="text-h5">Are you sure you want to delete this item?</v-card-title>
				<v-card-actions>
					<v-spacer></v-spacer>
					<v-btn
						color="accent"
						text
						@click="dialogDelete = !dialogDelete"
					>Cancel
					</v-btn>
					<v-btn
						color="error"
						text
						@click="deleteItemConfirm"
					>Confirm
					</v-btn>
					<v-spacer></v-spacer>
				</v-card-actions>
			</v-card>
		</v-dialog>
	</Admin>
</template>

<script>
	import Admin from "@/Layouts/Admin";
	import { Inertia } from "@inertiajs/inertia";
	import { Head, Link } from "@inertiajs/inertia-vue";
	import DataTable from "@/Components/DataTable";

	export default {
		components: {
			Head,
			Admin,
			Link,
			DataTable,
		},
		props: ["permissions", "filters"],
		data() {
			return {
				headers: [
					{ text: "Name", value: "name" },
					{ text: "Status", value: "deleted_at" },
					{ text: "Actions", value: "actions", sortable: false },
				],
				dialogDelete: false,
				itemId: "",
			};
		},
		methods: {
			deleteItem(item) {
				this.dialogDelete = true;
				this.itemId = item.id;
			},
			deleteItemConfirm() {
				this.dialogDelete = false;
				Inertia.delete(this.route("permissions.force.delete", this.itemId));
			},
		},
	};
</script>
