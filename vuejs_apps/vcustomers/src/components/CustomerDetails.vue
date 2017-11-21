<template>
  <div class="details container">
    <router-link to="/">Back</router-link>
    <h1 class="page-header">{{customer.first_name}} {{customer.last_name}}
      <span class="float-right">
        <router-link class="btn btn-primary" v-bind:to="'/edit/'+customer.id">Edit</router-link>
        <button class="btn btn-danger" @click="deleteCustomer(customer.id)">Delete</button>
      </span>
    </h1>
    <div class="card text-white bg-info mb-3">
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-info"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> {{customer.phone}}</li>
          <li class="list-group-item bg-info"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{customer.email}}</li>
        </ul>
      </div>
    </div>

    <div class="card text-white bg-info mb-3">
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-info"> {{customer.address}}</li>
          <li class="list-group-item bg-info">{{customer.city}}</li>
          <li class="list-group-item bg-info">{{customer.state}}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'customerdetails',
  data () {
    return {
      customer: ''
    }
  },
  methods: {
    fetchCustomer(id){
      this.$http.get('http://slimapp/api/customer/'+id)
      .then(function(response){
        this.customer = response.body;
      });
    },
    deleteCustomer(id){
      this.$http.delete('http://slimapp/api/customer/delete/'+id)
      .then(function(response){
        this.$router.push({path: '/', query: {alert: 'Customer Deleted'}})
      });
    }
  },
  created: function(){
    this.fetchCustomer(this.$route.params.id);
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
