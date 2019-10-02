<template>
    <div>
        <Navbar v-bind:badge="badge" v-bind:cartItems="cartItems" v-bind:admin="admin"></Navbar>
        <div v-if="admin" class="container add-product">
            <button class="btn btn-primary">Create Product</button>
        </div>
        
        <LoginModal></LoginModal>
        
        
        <Products v-on:add-to-cart="addToCart($event)" v-bind:admin="admin"></Products>
    </div>
</template>


<script>
import Navbar from './Navbar';
import LoginModal from './LoginModal';
import Products from './Products';

export default {
    data() {
        return {
            badge: 0,
            cartItems: []
        }
    },
    props: {
        admin: Boolean
    },
    components: {
        Navbar,
        LoginModal,
        Products
    },
    methods: {
        addToCart(item) {
            this.cartItems.push(item);
            this.badge++;
        }
    }
}
</script>

<style scoped>
    .add-product {
        margin-bottom: 20px;
    }
</style>