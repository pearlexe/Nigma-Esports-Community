<template>
  <div id="app">
    <app-navbar/>
    
    
    <router-view/>

    <app-footer/>
  </div>
</template>
<script>
import Navbar from './components/Navbar'
import footer from './components/footer'
export default {
  name:'App',
  components:{
    'app-navbar':Navbar,
    'app-footer':footer
  }
}
</script>
<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;

}


</style>
