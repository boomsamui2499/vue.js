<template>
  <h1 class="text-success">{{firstname}} มาจาก vue</h1>
</template>

<script>
export default {
    name: "App",
    data() {
    const test = 10
    return{
      firstname : "นัท",
      lastname : "บุณโย",
      age : test
    }
  }

}
</script>

<style>

</style>