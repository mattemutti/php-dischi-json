const { createApp } = Vue
createApp({
	data() {
		return {
			base_api_url: 'api.php'

		}
	},
	mounted() {

		axios.get(this.base_api_url)
			.then((result) => {
				console.log(result);
			})/*.catch((err) => {
				console.log(err.message);
			});*/

	}
}).mount('#app')


