<template>
  <div class="history">
    <h2>History:</h2>
    <table border="1" width="100%">
      <thead>
        <tr>
          <th>Loan Amount</th>
          <th>No Of Payments</th>
          <th>Interest Rate</th>
          <th>Mortgage</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in history" :key="item.id">
          <td>{{item.P}}</td>
          <td>{{item.n }}</td>
          <td>{{item.r }}</td>
          <td>{{item.mortgage }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import { getAllHistory } from '../services/HistoryService'
import { getUser } from '../services/UserService'
export default {
  name: 'History',
  props: {
  },
  data : function(){
    let history = getAllHistory(getUser())
    // let history = [{
    //     P:12,
    //     r:12,
    //     n:12,
    //     mortgage:144,
    //     userid:getUser()
    // },
    // {
    //     P:124,
    //     r:124,
    //     n:1,
    //     mortgage:124,
    //     userid:getUser()
    // }
    // ]
    return{
      'history' : history
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
