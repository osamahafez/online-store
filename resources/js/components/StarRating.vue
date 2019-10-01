<template>
    <div>
        <i class="fas fa-star text-warning" v-for="i in fullStar" :key="i"></i>
        <i class="fas fa-star-half-alt text-warning" v-if="halfStar"></i>
        <i class="far fa-star text-warning" v-for="i in noStar" :key="i+5"></i>
        <span class="text-muted reviews">{{reviewsCount}}</span>
    </div>

</template>

<script>
export default {
    props: {
        rate: String,
        reviewsCount: Number
    },

    data() {

        const full_stars_count = Math.floor(Number(this.rate));
        const half_stars_count = !Number.isInteger(Number(this.rate));
        const no_stars_count = (half_stars_count) ? 4 - full_stars_count : 5 - full_stars_count;

        return {
            // isInteger: Number.isInteger(this.rate)
            fullStar: full_stars_count,
            halfStar: half_stars_count,
            noStar: no_stars_count
        }
    }
}
</script>

<style scoped>
    .reviews {
        margin-left: 10px;
    }
</style>
