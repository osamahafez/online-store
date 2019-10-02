<template>
<div class="product-color">
    <div class="row">
        <div class="col-md-3">
            <h6>Colors:</h6>
        </div>
        <div class="col-md-9">
            <span class="trans-background text-center"><button class="btn btn-primary"></button></span>
            <span class="trans-background text-center"><button class="btn btn-warning"></button></span>
            <span class="trans-background text-center"><button class="btn btn-danger"></button></span>
            <span class="trans-background text-center"><button class="btn btn-success"></button></span>
        </div>
    </div>
</div>
</template>


<style scoped>

    .product-color {
        margin: 10px 0;
    }

    .trans-background {
        margin-right: 5px;
        background-color: rgba(0, 255, 255, 0);
        border-radius: 50%;
        padding: 1px 5px 5px 5px;
        box-shadow: 0 0 2px #888;
    }

    .trans-background:hover, .trans-background:active, .trans-background:focus {
       box-shadow: 0 0 2px rgb(0, 102, 255);
   }

   .btn {
       border-radius: 50%;
       padding: 8px 8px;
   }

    .btn-primary {
        background-color: rgb(68, 143, 211);
        border-color: rgb(68, 143, 211);
    }
    .btn-warning {
        background-color: rgb(200, 173, 126);
        border-color: rgb(200, 173, 126);
    }
    .btn-danger {
        background-color: rgb(201, 127, 128);
        border-color: rgb(201, 127, 128);
    }
    .btn-success {
        background-color: rgb(127, 200, 155);
        border-color: rgb(127, 200, 155);
    }

    .colors span {
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

</style>