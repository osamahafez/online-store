<template>
    <div class="card" style="width: 16rem;">
    <img v-bind:src="featuredPhoto" class="card-img-top" alt="photo">
    <div class="card-body">
        <h5 class="card-title">{{title}}</h5>
        <StarRating v-bind:rate="rate" v-bind:reviewsCount="reviewsCount"></StarRating>
        <hr>
        <div class="price-section">
            <span class="price">${{price}}</span>
            <button class="btn btn-primary btn-custom">ADD TO CART</button>
        </div>
    </div>
    </div>
</template>

<script>
import StarRating from './StarRating';

export default {
    props: {
        title: String,
        price: Number,
        featuredPhoto: String,
        rate: String,
        reviewsCount: Number
    },
    components: {
        StarRating
    }
}
</script>

<style scoped>

    .card {
        box-shadow: 1px 2px 6px #ccc;
        margin-bottom: 15px;
    }

    .card-img-top {
        height: 170px;
    }

    .price-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .price {
        font-weight: bold;
    }

    .btn-custom {
        font-size: 12px;
    }
</style>