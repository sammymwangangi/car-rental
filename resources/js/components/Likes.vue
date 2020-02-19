<template>
    <i class="btn fa fa-heart-o fa-2x text-danger" @click="handleClick"> {{dataLikes}}</i>
</template>

<script>
    export default {
        props: ['likes', 'carId'],
        data() {
            return {
                dataLikes: this.likes
            }
        },
        methods: {
            handleClick() {
                // this.dataLikes++
                axios.patch('/cars/' + this.carId, {
                    likes: this.dataLikes + 1,
                })
                .then(response => {
                    this.dataLikes++
                })
                .catch(error => {
                    console.log(error);
                })
            }
        },
    }
</script>
