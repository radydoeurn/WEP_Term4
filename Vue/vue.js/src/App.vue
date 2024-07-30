<template>
    <div>
        <h1>{{aa}}</h1>
        <p>{{text}}</p>
        <a href="link">Go to google</a>
        <input type="text" name="test" id="test" v-model="textInput">
        <h4>{{textInput}}</h4>
    </div>
</template>
<script>
    export default{
      name: 'App',
      data(){
        return{
          aa:"hello fri",
          text: 'hello world',
          textInput: '',
        }
      }
    }
</script>