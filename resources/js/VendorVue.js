const { component } = require("vue/types/umd");

new vue({
    el:"#EditElement",
   component:{
       'my-component':{
           template:"<div class='component'>Test</div>"
       },
    methods: {
        handleClick : function(){
            this.component="改變內容"
            console.log('success')
        }
    }
   }
})