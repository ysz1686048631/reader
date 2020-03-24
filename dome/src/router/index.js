import Vue from 'vue'
import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'
import Solider from '@/components/Solider'
import home from '@/components/home'
import User from '@/components/User'
import trends from '@/components/trends'
import outlogin from '@/components/outlogin'
import mybooks from '@/components/mybooks' 
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: '/',
      component: home
    },
    {
      path:'/Solider',
      name:'/Solider',
      component:Solider

    },
    {
      path:'/User',
      name:'/User',
      component:User,
      
    },
    {
      path:'/trends',
      name:'/trends',
      component:trends
    },
    {
      path:'/outlogin',
      name:'/outlogin',
      component:outlogin  
    },
    {
      path:'/mybooks',
      name:'/mybooks',
      component:mybooks 
    }
 
  ]
})
