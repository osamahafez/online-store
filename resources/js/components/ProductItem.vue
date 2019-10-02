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
                                <div class="row">
                                    <div class="col-md-8 text-center">
                                        <img class="chosen-photo" v-bind:src="chosenPhoto" alt="photo">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="gallery">
                                            <li><img v-on:click="selectChosenPhoto(photo1)" v-bind:src="photo1" alt="photo"></li>
                                            <li><img v-on:click="selectChosenPhoto(photo2)" v-bind:src="photo2" alt="photo"></li>
                                            <li><img v-on:click="selectChosenPhoto(photo3)" v-bind:src="photo3" alt="photo"></li>
                                            <li><img v-on:click="selectChosenPhoto(photo4)" v-bind:src="photo4" alt="photo"></li>
                                        </ul>
                                    </div>
                                </div>
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
                                <ProductColor></ProductColor>  
                                <ProductSize></ProductSize> 
                                <div class="description">
                                    <h6>Description</h6>
                                    <hr>
                                    <p>{{description}}</p>
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
import ProductColor from './ProductColor';
import ProductSize from './ProductSize';

export default {
    data() {
        return {
            photo1: '',
            photo2: '',
            photo3: '',
            photo4: '',
            chosenPhoto: '',
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
        description: String,
        price: Number,
        featuredPhoto: String,
        rate: String,
        reviewsCount: Number,
    },
    components: {
        StarRating,
        ProductColor,
        ProductSize
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
                    this.chosenPhoto = res.data[0].photo;
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
        },
        selectChosenPhoto(photo) {
            this.chosenPhoto = photo;
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
        margin: 10px 0;
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

    .chosen-photo {
        width: 220px;
        height: 220px;
    }

    .gallery {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .gallery img {
        width: 70px;
        height: 70px;
        margin-top: 5px;
    }

    .gallery img:hover {
        cursor: pointer;
        transition: 0.2s;
        transform: scale(1.1);
        outline: 2px solid rgb(0, 102, 255);
    }

    .description {
        margin: 20px 0;
    }

</style>