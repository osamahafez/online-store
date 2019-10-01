<template>
    <div class="pagination-container">
        <ul class="pagination">
            <li class="page-item"><a class="page-link bg-primary" href="#"><i class="fas fa-angle-left text-light"></i></a></li>
            <li class="page-item page-num"><a class="page-link" href="#">1</a></li>
            <li class="page-item page-num"><a class="page-link" href="#">2</a></li>
            <li class="page-item page-num"><a class="page-link" href="#">3</a></li>
            <li class="page-item page-num"><a class="page-link" href="#">4</a></li>
            <li class="page-item page-num"><a class="page-link" href="#">5</a></li>
            <li class="page-item page-num"><a class="page-link" href="#">6</a></li>
            <li class="page-item page-num"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link bg-primary" href="#"><i class="fas fa-angle-right text-light"></i></a></li>
        </ul>
    </div>
</template>


<style scoped>
    .pagination {
        justify-content: center;
        margin: 50px 0;
    }
    .page-link {
        border-top: 1px solid #0167ff;
        border-bottom: 1px solid #0167ff;
    }
    
</style>