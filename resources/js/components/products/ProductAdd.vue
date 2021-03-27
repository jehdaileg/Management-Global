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


         <label><strong>Nom Categorie:</strong></label>

         <select class="form-control" v-model="form.category_id">

          <option v-for="(item, index) in categories" :key="index" :value="item.id">{{ item.name }}</option>

        </select>

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

export default {


  data() {

    return {

      form : {

        category_id : 0


      }


    }
  }, 

  computed : {

    ...mapGetters({

      'categories' : 'getCategories'


    })


  },

  mounted() {

   store.dispatch(actions.GET_CATEGORIES)
 }



};

</script>
