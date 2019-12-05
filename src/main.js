import Vue from 'vue'
import App from './App.vue'
import router from './router'
Vue.config.productionTip = false

import Element from 'element-ui'
import '@/scss/index.scss'
Vue.use(Element)

import lui from "@/lui"
Vue.use(lui)

router.beforeEach((to, from, next) => {
  console.log(to)
  if (to.meta && to.meta.title)
    document.title = to.meta.title
  next()
})

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
