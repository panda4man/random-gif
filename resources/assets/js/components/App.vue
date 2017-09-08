<template>
	<v-app>
		<v-toolbar dark class="primary">
			<v-toolbar-title class="white--text">{{title}}</v-toolbar-title>
			<v-spacer></v-spacer>
		</v-toolbar>
		<main>
			<v-container fluid>
				<router-view></router-view>
			</v-container>
		</main>
	</v-app>
</template>

<script>
export default {
	data() {
		return {
			title: Laravel.name
		}
	}
}
</script>