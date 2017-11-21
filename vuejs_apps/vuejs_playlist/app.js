Vue.component('greeting', {
  template: '<p>Hey there, I am {{name}} . <button @click="changeName">Change name</button></p>',
  data: function(){
    return {
      name:'Yoshi'
    }
  },
  methods:{
    changeName:function(){
      this.name = 'Mario';
    }
  }
});


new Vue({
  el:'#vue-app-one',
  data:{
    output: 'Your fav food'
  },
  methods:{
    readRefs:function(){
      console.log(this.$refs.test.innerText);
      this.output = this.$refs.input.value
    }
  }
});


new Vue({
  el:'#vue-app-two'
});
