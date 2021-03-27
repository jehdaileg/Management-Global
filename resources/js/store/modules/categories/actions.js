import * as actions from '../../action-types'

import * as mutations from '../../mutation-types'


import Axios from 'axios'


export default {

	[actions.GET_CATEGORIES]({ commit }) {

		Axios.get('/api/categories')

		     .then(res => {

		     	if(res.data.success === true){

		     		commit(mutations.SET_CATEGORIES, res.data.data)
		     	}
		     })
	}
}
