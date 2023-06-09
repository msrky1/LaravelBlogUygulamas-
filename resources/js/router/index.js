import { createRouter, createWebHistory } from 'vue-router';

import Blog from '../Admin/Blog/Blog.vue';
import Home from '../components/Home.vue';
import BlogAdd from '../Admin/Blog/BlogAdd.vue';
import BlogAll from '../Admin/Blog/AllBlog.vue';
import User from '../Admin/Users/User.vue';




 
const routes = [
    
    {



    path: '/blog/:id',
    name: 'blog',
    component: Blog


 },
 {



   path: '/blog/all',
   name: 'blog-all',
   component: BlogAll


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

    
