<template>
    <div>
        <div class="card" style="width: 16rem;">
            <div v-on:click="loadPhotos()" class="product-img" data-toggle="modal" v-bind:data-target="'#'+modal_id">
                <img v-bind:src="featuredPhoto" class="card-img-top" alt="photo">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{title}}</h5>
                <StarRating v-bind:rate="rate" v-bind:reviewsCount="reviewsCount"></StarRating>
                <hr>
                <div class="price-section">
                    <span class="price">${{price}}</span>
                    <button v-on:click="$emit('add-to-cart', addedItem)" class="btn btn-primary btn-custom">ADD TO CART</button>
                </div>
            </div>
        </div>

        <!-- Product View Modal -->
        <div class="modal fade" v-bind:id="modal_id">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                photos
                            </div>
                            <div class="col-md-6">
                                <h5>{{title}}</h5>
                                <small class="text-muted">REF. 2597/399</small>    
                                <div class="quantity">
                                    <span class="price">${{addedItem.total_price}}</span>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <button v-on:click="dec()" type="button" class="btn btn-light">-</button>
                                        <button type="button" class="btn btn-light disabled quantity-counter">{{quantity}}</button>
                                        <button v-on:click="inc()" type="button" class="btn btn-light">+</button>
                                    </div>
                                    <button v-on:click="$emit('add-to-cart', addedItem)" class="btn btn-primary btn-sm">ADD TO CART</button>
                                </div>                            
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import StarRating from './StarRating';

export default {
    data() {
        return {
            photo1: '',
            photo2: '',
            photo3: '',
            photo4: '',
            quantity: 1,
            addedItem: {
                title: this.title,
                total_price: this.price,
                photo: this.featuredPhoto
            }
        }
    },

    props: {
        product_id: Number,
        modal_id: String,
        title: String,
        price: Number,
        featuredPhoto: String,
        rate: String,
        reviewsCount: Number,
    },
    components: {
        StarRating
    },
    methods: {
        loadPhotos() {
            axios
                .get(`api/product/${this.product_id}`)
                .then(res => {
                    this.photo1 = res.data[0].photo;
                    this.photo2 = res.data[1].photo;
                    this.photo3 = res.data[2].photo;
                    this.photo4 = res.data[3].photo;
                })
                .catch(err => console.log(err));
        },
        dec() {
            this.quantity = (this.quantity - 1 === 0) ? 1 : this.quantity - 1;
            this.addedItem.total_price = this.quantity * this.price;
        },
        inc() {
            this.quantity = (this.quantity + 1 === 6) ? 5 : this.quantity + 1;
            this.addedItem.total_price = this.quantity * this.price;
        },
        addToCart() {
            this.badge = this.badge + 1;
        }
    },

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

    .product-img:hover {
        cursor: pointer;
        transition: 0.3s;
        transform: translateY(-5px);
    }

    .quantity {
        display: flex;
        justify-content: space-between;
    }

    .quantity .price {
        font-size: 20px;
        font-weight: bold;
    }

    .btn-light {
        background-color: #fff;
    }

    .quantity-counter {
        padding: 0 24px;
    }
</style>