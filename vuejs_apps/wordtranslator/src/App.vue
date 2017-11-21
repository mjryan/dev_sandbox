<template>
  <div id="app" class="text-center container card bg-primary mt-2 pt-3 pb-1">
    <h1 class="text-white">Word Translator</h1>
    <h5 class=" text-white">Powerd By Vue.js</h5>
    <TranslateForm @formSubmit="translateText"></TranslateForm>
    <TranslateOutput v-text="translatedText"></TranslateOutput>
  </div>
</template>

<script>
import TranslateForm from './components/TranslateForm'
import TranslateOutput from './components/TranslateOutput'

export default {
  name: 'app',
  components:{
    TranslateForm,
    TranslateOutput
  },
  data: function(){
    return {
      translatedText:''
    }
  },
  methods:{
    translateText:function(text, language){
      this.$http.get('https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20171118T195439Z.e2f3c2dcc50162d9.57e212dc53f3759f715398e163ee8addc45330ae&lang='+language+'&text='+text)
      .then((response) => {
        this.translatedText = response.body.text[0];
      });
    }
  }
}
</script>

<style>
body {
background: #fefefe;

}
</style>
