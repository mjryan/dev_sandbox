<template>
  <div  class="card text-white mt-4 mb-3" id="translateForm">
    <div class="card-body">
      <form @submit="formSubmit">
        <div class="form-row">
          <div class="col col-md-7">
            <input class="form-control" type="text" v-model="textToTranslate" placeholder="Enter a Word...">
          </div>
          <div class="col col-md-3">
            <select class="form-control" v-model="language">
              <option value="zh">Chinese</option>
              <option value="fr">French</option>
              <option value="de">German</option>
              <option value="ga">Irish</option>
              <option value="it">Italian</option>
              <option value="pl">Polish</option>
              <option value="ru">Russian</option>
              <option value="es">Spanish</option>
            </select>
          </div>
          <div class="col col-md-2">
            <input class="btn btn-info" type="submit" value="Translate">
          </div>
        </div>
      </form>
    </div>
  </div>


</template>

<script>

export default {
  name: 'translateForm',
  data(){
    return {
      textToTranslate:'',
      language: ''
    }
  },
  created(){
    this.language = 'ru';
  },
  methods:{
    formSubmit(e){
      this.$emit('formSubmit', this.textToTranslate, this.language);
      e.preventDefault();

    }
  }
}
</script>

<style>


</style>
