<template>
    <nav class="navbar navbar-expand">
        <div class="container">

        
                <span class="navbar-brand brand-name">
                    <img src="/images/logo.png" alt="logo" class='logo' /> 
                </span>            
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarElements" aria-controls="navbarElements" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars fa-lg fa-2x text-dark"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarElements">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <button type="button" class="login-btn" data-toggle="modal" data-target="#loginModal">Login</button>
                        </li>
                        <li class="nav-item">
                            <div class="cart-item">                                
                                <span class="notify-badge">12</span>
                                <img src="/svg/cart.svg" alt="cart" class="cart" />
                                <div class="cart-dropdown">
                                    <p>Link 1</p>
                                    <p>Link 2</p>
                                    <p>Link 3</p>
                                </div>
                            </div>
                        </li>
                    </ul>
        
                </div>
            </div>
        </nav>
</template>

<script>
export default {
    
}
</script>


<style scoped>
    nav {
        background-color: #fff;
        box-shadow: 0 0 15px -5px #000;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }

    .logo {
        width: 125px;
        height: 19px;
    }

    .login-btn {
        background-color: rgba(0, 0, 0, 0);
        display: inline-block;
        padding: 1px 19px;
        margin-top: 7px;
        margin-right: 30px;
        font-size: 15px;
        border-radius: 5px;
        color: rgb(0, 102, 255);
        cursor: pointer;
        border: 2px solid rgb(0, 102, 255);
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        }

        .login-btn:hover {
        background-color: rgb(0, 102, 255);
        color: #fff;
        }

        .cart {
            width: 33px;
            height: 33px;
            margin-top: 3px;
            cursor: pointer;
        }

        .cart-item {
            position:relative;
            display:inline-block;
        }
        .notify-badge{
            position: absolute;
            right: -7px;
            top: -2px;
            background: rgb(255,0,154);
            text-align: center;
            border-radius: 50%;
            color: white;
            padding: 0px 3px;
            font-size: 12px;
        }

        .cart-dropdown {
            display: block; /* or display none */
            position: absolute;
            right: 0;
            margin-top: 10px;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 3px 10px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .cart-dropdown::before {
            content: '';
            position: absolute;
            top: -4px;
            right: 8px;
            width: 15px;
            height: 15px;
            background-color: #fff;
            transform: rotateZ(45deg);
        }
</style>