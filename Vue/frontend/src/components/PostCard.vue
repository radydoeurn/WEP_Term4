<template>
    <div class="card p-3">
        <h5>{{post.title}}</h5>
        <p>{{post.body}}</p>
        <div class="row flex-row justify-content-between">
            <h6>{{post.user}}</h6>
            <p class="row flex-row justify-content-end">{{ post.date }}</p>
        </div>
        
    </div>
</template>
<script>
    export default {
        name: 'PostCard',
        props:["post"],
    }
</script>