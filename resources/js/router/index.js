import { createRouter, createWebHistory } from 'vue-router';

import Blog from '../Admin/Blog/Blog.vue';
import Home from '../components/Home.vue';
import BlogAdd from '../Admin/Blog/BlogAdd.vue'



const routes = [
    
    {



    path: '/blog',
    name: 'blog',
    component: Blog


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


}



];


 const router = createRouter({


    history: createWebHistory(import.meta.env.BASE_URL),

    routes,
    linkActiveClass: 'nav-link active',
    linkExactActiveClass: 'nav-link',
 });


 export default router;

    
