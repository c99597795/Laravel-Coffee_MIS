<template>
    <div>
        <p>Remote api data show:</p>
        <input type="text" v-model="text"/>
        <button @click="returnEvent()">selected data</button>
    </div>
    <!-- <div id='show-element' class='EditElement_wrapper' v-if="isShow">
            <div class='EditElement_content'>
              <form id='{{ $admin->id }}' action="{{ route('admin.update',[$admin->id])}}" method='post'>
                  @csrf
                  @method('put')
                <div class='form-group'>
                      <label for='name'>姓名</label>
                      <input type='text' class='form-control' id='name' name='name' value="{{old('name',$admin->name)}}">
                  </div>
                  <div class='form-group'>
                      <label for='email'>Email</label>
                      <input type='text' class='form-control' id='email' name='email' value="{{old('email',$admin->email)}}">
                  </div>
                  <button type='submit' class="btn btn-primary">Update</button>
                  <div class="close-wrapper">
                    <div class="close-icon" @click="closeMore">
                      <span>X</span>
                    </div>
                  </div>             
              </form>
            </div>
    </div> -->
</template>
<script type="module">
    export default {
    name : 'Editelement',
    props : {
        msg : { 
            type : String,
            default : ''
        }
    },
    data: function(){
        return{
            text : ''
        }
    },
    methods : {
        returnEvent () {
            var obj = {
                status : true,
                data : this.text || this.msg
            };
            this.$emit('close-child', obj);
        }
    }
};
</script>