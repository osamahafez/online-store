<template>
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                        
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Login</button>
                      
                    </form>
                </div>                
            </div>
        </div>
    </div>
</template>


<style scoped>

    .modal-body {
        padding: 65px;
    }

    .form-control {
        margin: auto;
        width: 80%;
        padding: 1.8rem .75rem;
        font-size: 1.2rem;
        font-weight: 300;
    }

    .btn {
        margin: auto;
        width: 80%;
        padding: 0.9rem 0;
        font-size: 1.2em;
    }

</style>