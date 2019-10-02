<template>
    <div>
        <Navbar v-bind:badge="badge" v-bind:cartItems="cartItems"></Navbar>
        <LoginModal></LoginModal>
        <Products v-on:add-to-cart="addToCart($event)" ></Products>
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

</style>