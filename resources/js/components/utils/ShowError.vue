<template>

	<div v-if="is_errors" class="alert alert-danger">

		<ul>
			<li v-for="(item, index) in errors" :key="index">

				{{ item[0] }}

			</li>
		</ul>
		
	</div>
	

</template>


<script>

import { mapGetters } from 'vuex'

export default {

	computed : {

		...mapGetters({

			'is_errors' : 'getIsErrors',

			'errors' : 'getErrors'


		})


	}

}
	

</script>

<style scoped>

	
</style>