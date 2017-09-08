<template>
	<v-layout row justify-center>
		<v-flex xs12 sm10 md8 lg6 justify-center>
			<v-card>
				<v-card-media :src="gif" height="500px"></v-card-media>
			</v-card>
			<v-btn :loading="http.fetching" class="white" fab primary absolute bottom right @click.native="randomGif">
				<v-icon dark>autorenew</v-icon>
			</v-btn>
		</v-flex>
	</v-layout>
</template>

<script>
export default {
	data() {
        return {
            http: {
               	fetching: false
			},
            gif: null
		}
    },
	mounted() {
	  	this.randomGif();
	},
	methods: {
	    randomGif() {
	        this.http.fetching = true;

	        this.$http.get('/api/gif/random', {

			}).then(res => {
			   let body = res.data;
			   this.gif = body.data.data.image_original_url;
			   this.http.fetching = false;
			}).catch(res => {
			    let err = res.response;
                this.http.fetching = false;
			    console.log(err);
			});
		}
	}
}
</script>