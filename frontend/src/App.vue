<template>
  <Calculator/>
  <History/>
</template>

<script>
import Calculator from './components/Calculator.vue'
import History from './components/History.vue'
export default {
  name: 'App',
  components: {
    Calculator,
    History
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
