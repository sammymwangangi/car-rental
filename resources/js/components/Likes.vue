<template>
    <i class="fa fa-heart fa-2x text-danger" @click="handleClick"> <sup><small> {{dataLikes}}</small></sup></i>
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
