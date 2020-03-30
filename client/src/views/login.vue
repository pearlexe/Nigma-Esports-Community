<template>
<div class = 'container2'>
      <div class = 'row'>
        <div class = 'col-md-8'>
            <h2>Login your Account</h2>
    <form @submit.prevent = 'loginUser'>
            <div class = 'form-group text-left'>
                <label for = 'Username'>Username</label>
                <input type = 'text' name='uname' id='uname' placeholder='Enter Username' v-model='uname' class='form-control'/>
            </div>
            <div class = 'form-group text-left'>
                <label for = 'Password'>Password</label>
                <input type = 'password' name='pass' id='pass' placeholder='Enter Password' v-model='pass' class='form-control'/>
            </div>
            <button type="submit" class="btn-success">Login</button>
            <button type="button" class="cancelbtn">Cancel</button>
    </form>
        
    </div>
    </div>
</div>

</template>

<script>
export default{
  data() {
    return {
      uname: '',
      pass: ''

    }
  },
  methods:{
      loginUser(){
        if (this.uname === '') {
          alert('Please enter your  Username.')
        }
      }
  }
}
</script>