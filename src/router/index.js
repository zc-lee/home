import Vue from 'vue'
import VueRouter from 'vue-router'

const originalPush = VueRouter.prototype.push
VueRouter.prototype.push = function push(location) {
  return originalPush.call(this, location).catch(err => err)
}

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'index',
    meta: { title: '首页' },
    component: () => import('@/views/index'),
    children: [
      {
        path: '/index1',
        name: 'index1',
        meta: { title: '测试' },
        component: () => import('@/views/test')
      }
    ]
  }, {
    path: '/test',
    name: 'test',
    meta: { title: '测试' },
    component: () => import('@/views/test')
  },{
    path: '/countSalary',
    name: 'countSalary',
    meta: { title: 'countSalary' },
    component: () => import('@/views/countSalary')
  },{
    path: '/router',
    name: 'router',
    meta: { title: 'router' },
    component: () => import('@/views/router')
  },{
    path: '/iframe',
    name: 'iframe',
    meta: { title: 'iframe' },
    component: () => import('@/views/iframe')
  },{
    path: '/resume',
    name: 'resume',
    meta: { title: 'resume' },
    component: () => import('@/views/resume/index')
  },
  {
    path: '*',
    redirect: '/'
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
