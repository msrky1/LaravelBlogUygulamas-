import { createRouter, createWebHistory } from 'vue-router';

import Blog from '../Admin/Blog/Blog.vue';
import Home from '../components/Home.vue';
import BlogAdd from '../Admin/Blog/BlogAdd.vue';
import User from '../Admin/Users/User.vue';
import Login from '../Admin/Auth/Login.vue';



 
const routes = [
    
    {



    path: '/blog/:id',
    name: 'blog',
    component: Blog


 },

 {



   path: '/login',
   name: 'Login',
   component: Login


},

 
 {



    path: '/admin-paneli',
    name: 'admin-paneli',
    component: Home


 },

 {



   path: '/blog-ekle',
   name: 'blog-ekle',
   component: BlogAdd


},
{



   path: '/users',
   name: 'users',
   component: User


}



];


 const router = createRouter({


    history: createWebHistory(import.meta.env.BASE_URL),

    routes,
    linkActiveClass: 'nav-link active',
    linkExactActiveClass: 'nav-link',
 });


 export default router;

    
