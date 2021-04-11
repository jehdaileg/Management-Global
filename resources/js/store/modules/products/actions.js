import * as actions from '../../action-types'

import * as mutations from '../../mutation-types'



import Axios from 'axios'

export default {

	[actions.ADD_PRODUCT]({commit}, payload){

		Axios.post('/products', payload)

   			 .then(res => {


   			 })
   			 .catch(err =>{

   			 	commit(mutations.SET_ERRORS, err.response.data.errors)

   			 })
	}
}