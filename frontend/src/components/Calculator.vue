<template>
  <div class="calculator">
    <div class = "form-container">
      <div class="input-container">
        <label>principle loan amount</label>
        <input type="number" v-model="loan_amount">
      </div>
      <div class="input-container">
        <label>no of payments</label>
        <input type="number" v-model="no_of_payments">
      </div>
      <div class="input-container">
        <label>interest rate</label>
        <input type="number" v-model="i_rate">
      </div>
      <div class="input-container">
        <button @click="calculate">Calculate</button>
      </div>
    </div>

    <div class="result">
      <h1 class="label">Mortgage is :</h1>
      <h1 class="value">{{mortgage}}</h1>
    </div>

  </div>
</template>

<script>

export default {
  name: 'Calculator',
  props: [
    'default_loan_amount',
    'default_no_of_payments',
    'default_i_rate'
  ],
  components: {
  },
  data(){
    return{
      mortgage:this.mortgage,
      loan_amount:this.default_loan_amount,
      no_of_payments:this.default_no_of_payments,
      i_rate:this.default_i_rate
    }
  },
  methods:{
    calculate(){
      let P = this.loan_amount
      let r = this.i_rate
      let n = this.no_of_payments
      this.mortgage = P * (r * (1+r)**n / (((1+r)**n)-1))
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
