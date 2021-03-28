<template>

	<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Creation Produit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="" method="">

      <div class="card-body">
        <div class="form-group">

          <label><strong>Categorie:</strong></label>

          <Select2 v-model="form.category_id" :options="categories" :settings="{ placeholder : 'Selectionner une categorie' }"></Select2>

        </div>

      </div>

      <div class="card-body">

       <div class="form-group">

        <label><strong>Brand:</strong></label>

        <Select2 v-model="form.brand_id" :options="brands" :settings="{ placeholder : 'Selectionner une brand' }"></Select2>

      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
  </form>
</div>



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

        brand_id : 0


      }


    }
  }, 

  computed : {

    ...mapGetters({

      'categories' : 'getCategories',

      'brands' : 'getBrands'


    })


  },

  mounted() {

    store.dispatch(actions.GET_CATEGORIES),

    store.dispatch(actions.GET_BRANDS)

  }



};

</script>
