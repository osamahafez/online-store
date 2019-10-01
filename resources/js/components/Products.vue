<template>
    <div class="container">
        <div class="row">

            <!-- <div v-for="product in products" v-bind:key="product.id">
               <h3>{{product.name}}</h3>
            </div> -->

            <div class="col-md-3" v-for="product in products" v-bind:key="product.id">
                <ProductItem 
                    v-bind:title="product.name"
                    v-bind:price="product.price"
                    v-bind:featuredPhoto="product.featuredPhoto"
                    v-bind:rate="product.rate"
                    v-bind:reviewsCount="product.reviewsCount"
                ></ProductItem>
            </div>
        </div>
        <Pagination></Pagination>
    </div>
</template>

<script>
import ProductItem from './ProductItem';
import Pagination from './Pagination';

export default {

    data() {
        return {
            products: [],
            product: ''
        }
    },

    components: {
        ProductItem,
        Pagination
    },

    methods: {
        getProducts() {
        axios
            .get('api/products')
            .then(res => {this.products = res.data})
            .catch(err => console.log(err));
        }
    },

    created() {
        this.getProducts();
    }
}
</script>

<style scoped>

</style>