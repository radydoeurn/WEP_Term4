<template>
    <div class="container">
        <div class="m-auto p-5">
            <h2>Create your post here...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate recusandae aliquam ullam vero ipsa veritatis distinctio? Sapiente nemo aspernatur modi!</p>
            <form action="#">
                <div class="form-group" style=" display: flex;flex-direction: column;">
                    <label for="title">Post's Title</label>
                    <input class="p-2" type="text" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group" style="display: flex;flex-direction: column; margin-top: 20px;">
                    <label for="body">Post's Body</label>
                    <input type="body" name="body" id="body" placeholder="body" style="height: 120px;">
                </div>
            </form>
        </div>
    </div>
    <FooterVue></FooterVue>
</template>
<script>
import FooterVue from '../components/FooterVue.vue';
    export default {
        name: "CreatePostForm",
        components: {
            FooterVue
        },
    }
</script>