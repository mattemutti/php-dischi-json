const { createApp } = Vue
createApp({
	data() {
		return {
			base_api_url: 'api.php',
			dischi: [],
			error: '',

		}
	},
	mounted() {

		axios.get(this.base_api_url)
			.then((result) => {
				//console.log(result);
				this.dischi = result.data;
				console.log(this.dischi);
			}).catch((err) => {
				//console.log(err.message);
				this.error = err.message;
			});

	}
}).mount('#app')


