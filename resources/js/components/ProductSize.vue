<template>
<div class="product-size">
    <div class="row">
        <div class="col-md-3">
            <h6>Size:</h6>
        </div>
        <div class="col-md-9">
            <span class="size-background">35.5</span>
            <span class="size-background">36</span>
            <span class="size-background">37</span>
            <span class="size-background">38</span>
            <span class="size-background">39</span>
            <span class="size-background">39.5</span>
        </div>
    </div>
</div>
</template>


<style scoped>

    .product-size {
        margin: 10px 0;
    }

    .size-background {
        display: inline-block;
        width: 31px;
        height: 28px;
        margin-right: 1px;
        background-color: rgb(203, 203, 203);
        border-radius: 50%;
        padding: 6px;
        font-size: 11px;
        text-align: center;
        color: #fff;
        cursor: pointer;
    }

    .size-background:hover, .size-background:active, .size-background:focus {
        background-color: rgb(0, 102, 255);
   }

</style>