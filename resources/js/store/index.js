import Vue from "vue";

import Vuex from "vuex";


Vue.use(Vuex);


//Modules to Import 

import categories from './modules/categories';  //categories module

import brands from './modules/brands'  //brands module 

import sizes from './modules/sizes'  //sizes module 



export default new Vuex.Store({

	modules : {

		categories,

		brands,

		sizes
	}
})



