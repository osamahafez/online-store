<template>
    <div class="cart-container">
        <div class="row justify-content-start">
            <div class="col-md-3">
                <img class="cart-img" v-bind:src="photo" alt="shoes">
            </div>
            <div class="col-md-9 info">
                <h5>{{title}}</h5>
                <span>${{price}}</span>
            </div>
        </div>    
        <hr>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        photo: String,
        price: Number
    }
}
</script>

<style scoped>
    .cart-container {
        margin: 10px 20px;
        
    }
    .cart-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .info h5 {
        font-size: 1em;
    }

    .info span {
        font-weight: bold;
    }
</style>