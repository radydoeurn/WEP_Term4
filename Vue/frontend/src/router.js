import { createWebHistory, createRouter } from 'vue-router';
import HomePage from './views/HomePage'
import PostsPage from './views/PostPage'
import UserPage from './views/UserPage'
import PostCreate from './views/CreatePostForm.vue'
const routes = [
    {
        path: '/',
        name: 'HomePage',
        component: HomePage,
    }, 
    {
        path: '/posts',
        name: 'PostsPage',
        component: PostsPage,
    },
    {
        path: '/users',
        name: 'UserPage',
        component: UserPage
    },
    {
        path: '/posts/create',
        name: 'PostCreate',
        component: PostCreate
    }
]

const routers = createRouter({history: createWebHistory(), routes});
export default routers;