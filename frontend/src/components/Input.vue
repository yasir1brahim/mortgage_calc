<template>
  <div class="input">
    <label>{{display}}</label>
    <input v-model="default" />
  </div>
</template>

<script>
export default {
  name: 'Input',
  props: [
    'display',
    'default'
  ],
  data(){
    return{
      'value' : this.default
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
