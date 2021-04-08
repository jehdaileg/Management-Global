<template>


  <form role="form" @submit.prevent="SubmitForm">


  <div class="row">

    <div class="col-sm-6">

      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Creation Produit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        

          <div class="card-body">
            <div class="form-group">

              <label><strong>Categorie:</strong> <span class="text-danger">*</span></label>

              <Select2 v-model="form.category_id" :options="categories" :settings="{ placeholder : 'Selectionner une categorie' }"></Select2>

            </div>

            <div class="form-group">

              <label><strong>Brand:</strong> <span class="text-danger">*</span></label>

              <Select2 v-model="form.brand_id" :options="brands" :settings="{ placeholder : 'Selectionner une brand' }"></Select2>

            </div>

            <div class="form-group">

              <label><strong>SKU:</strong> <span class="text-danger">*</span></label>

              <input type="text" v-model="form.sku" class="form-control" placeholder="Entrer Sku... ">

            </div>

            <div class="form-group">

              <label><strong>Nom:</strong> <span class="text-danger">*</span></label>

              <input type="text" v-model="form.name" class="form-control" placeholder="Entrer nom...">

            </div>

            <div class="form-group">

              <label><strong>Image:</strong> <span class="text-danger">*</span></label>

              <input type="file" class="form-control">

            </div>

            <div class="form-group">

              <label><strong>Cost Price ($) :</strong> <span class="text-danger">*</span></label>

              <input type="text" v-model="form.cost_price" class="form-control" placeholder="Entrer cost price... ">

            </div>

            <div class="form-group">

              <label><strong>Retail Price ($) :</strong> <span class="text-danger">*</span></label>

              <input type="text" v-model="form.retail_price" class="form-control" placeholder="Entrer retail price...">

            </div>

            <div class="form-group">

              <label><strong>Annee :</strong> <span class="text-danger">*</span></label>

              <input type="text" v-model="form.year" class="form-control" placeholder="Entrer Annee Ex[2021]...">

            </div>

            <div class="form-group">

              <label><strong>Description: </strong> <span class="text-danger">*</span></label>

              <input type="text" v-model="form.description" class="form-control" placeholder="Entrer description Max[250]... ">

            </div>

            <div class="form-group">

              <label><strong>Status:</strong> <span class="text-danger">*</span></label>

              <select class="form-control" v-model="form.status">

                <option value=1>Active</option>
                <option value=0>Inactive</option>

              </select>


            </div>



            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>

          </div>
        
      </div>


    </div>

    <div class="col-sm-6">

      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Product Siz</h3>
        </div>

        <div class="card-body">

          <div class="row" v-for="(item, index) in form.items" :key="index">

            <div class="col-sm-4">
              <select class="form-control" v-model="item.size_id">
                <option value="">Select size</option>
                <option v-for="(size, index) in sizes" :key="index" :value="size.id">{{ size.name }}</option>
              </select>
            </div>

            <div class="col-sm-3">
              <input type="text" v-model="item.location" class="form-control" placeholder="Location...">
            </div>

            <div class="col-sm-3">
              <input type="number" class="form-control" v-model="item.quantity" placeholder="Quantity...">
            </div>

            <div class="col-sm-2">
              <button type="button" @click="deleteItem(index)" class="btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            </div>

            &nbsp; &nbsp; <button @click="addItem" class="btn btn-primary mt-3 mb-1"><i class="fa fa-plus"></i> Ajouter</button>

          </div>

        </div>
      </div>

    </div>


    
  </div>

  </form>


</template>

<script>

import store from '../../store'

import * as actions from '../../store/action-types' 

import { mapGetters } from 'vuex'


import Select2 from 'v-select2-component'

export default {


  components : {

    Select2


  },

  data() {

    return {

      form : {

        category_id : 0,

        brand_id : 0,

        sku : '',

        name : '',

        image : '',

        cost_price : 0,

        retail_price : 0,

        year : '',

        description : '',

        status : 1,

        items : [

        {

          size_id : '',

          location : '',

          quantity : 0 

        }


        ]

      }


    }
  }, 

  computed : {

    ...mapGetters({

      'categories' : 'getCategories',

      'brands' : 'getBrands',

      'sizes'  : 'getSizes'


    })


  },

  mounted() {

    store.dispatch(actions.GET_CATEGORIES),

    store.dispatch(actions.GET_BRANDS),

    store.dispatch(actions.GET_SIZES)

  },

  methods : {

    addItem(){

      let item = {

         size_id : '',

          location : '',

          quantity : 0 

      }
       this.form.items.push(item)
    },


    deleteItem(index){

      this.form.items.splice(index, 1)


    },

    SubmitForm(){

      


    }


  }







};

</script>
