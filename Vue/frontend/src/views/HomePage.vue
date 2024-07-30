<template>
    <div class="container mt-5">
        <h1>Welcome to homepage</h1>
        <p>This is the homepage</p>
        <hr>
        <div class="row mt-2">
            <div v-for="post in posts" :key="post.title" :body="post.body" :user="post.user" :date="post.date" class="col-4 mt-2">
                <posts-card :post="post"></posts-card>
            </div>
        </div>
    </div>
    <br><br><b></b>
    <footer-vue class="mt-4"></footer-vue>
</template>
<script>
import PostCard from '../components/PostCard.vue';
import FooterVue from '../components/FooterVue.vue';
 export default {
        name: 'HomePage',
        components: {
            'posts-card': PostCard,
            'footer-vue': FooterVue
        },
        data() {
            return {
                posts:[
                    {
                        title: 'PNC student went to visit Angkor temple',
                        body: 'they were the first to visit the Angkor Temple',
                        user: 'Ratanak',
                        date: '28-May-2024'
                    },
                    {
                        title: 'PNC student went to visit Angkor temple',
                        body: 'they were the first to visit the Angkor Temple',
                        user: 'Ratanak',
                        date: '28-May-2024'
                    },
                    {
                        title: 'PNC student went to visit Angkor temple',
                        body: 'they were the first to visit the Angkor Temple',
                        user: 'Ratanak',
                        date: '28-May-2024'
                    },
                    {
                        title: 'PNC student went to visit Angkor temple',
                        body: 'they were the first to visit the Angkor Temple',
                        user: 'Ratanak',
                        date: '28-May-2024'
                    },
                    {
                        title: 'PNC student went to visit Angkor temple',
                        body: 'they were the first to visit the Angkor Temple',
                        user: 'Ratanak',
                        date: '28-May-2024'
                    },
                    {
                        title: 'PNC student went to visit Angkor temple',
                        body: 'they were the first to visit the Angkor Temple',
                        user: 'Ratanak',
                        date: '28-May-2024'
                    }
                ]
            }
        },
    }
</script>