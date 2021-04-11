import Vue from "vue";

import Vuex from "vuex";


Vue.use(Vuex);


//Modules to Import 

import errors from './modules/utils/errors'

import categories from './modules/categories';  //categories module

import brands from './modules/brands'  //brands module 

import sizes from './modules/sizes'  //sizes module 

import products from './modules/products'



export default new Vuex.Store({

	modules : {

		errors,

		categories,

		brands,

		sizes,

		products
	}
})



