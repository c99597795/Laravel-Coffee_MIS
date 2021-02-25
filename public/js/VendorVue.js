new Vue({
  el: '#demo',
  /*data() {
    return {
      isShow: false
    }
   },*/
  methods: {
    showMore() {
      this.isShow = true
      console.log=('showMore')
    },
    closeMore() {
      this.isShow = false
      console.log=('closeMore()')
    }
  }
})